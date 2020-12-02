<?php


namespace Model\Data;

use Model\Business\Fromage;

class daoFromage extends DBAL
{
    private function initFromage(array $row) : Fromage
    {
        $daoPays = new daoPays();
        $row['origin'] = $daoPays->getPays($row['origin']);
        $row['creation'] = new \DateTime($row['creation']);
        return new Fromage($row);
    }
    public function getFromage(int $idFromage) : Fromage
    {
        try {
            $sql = "select * from fromage where id = $idFromage";
            $sth = $this->pdo->query($sql);
            $sth->execute();
            $row = $sth->fetch(\PDO::FETCH_ASSOC);
            return $this->initFromage($row);
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
            $result = new Fromage();
        }
        return $result;
    }
    public function  getFromageList() : array
    {
        $result = array();
        try {
            $sql = "select * from fromage";
            $sth = $this->pdo->query($sql);
            $sth->execute();
            $tab = $sth->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($tab as $row) {
                $result[] = $this->initFromage($row);
            }
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $result;
    }
    public function newFromage(Fromage $fromage) : bool
    {
        try {
            $sql = "insert into fromage values (:nom, :creation, :image, :pays_origine)";
            $sth = $this->pdo->prepare($sql);
            $sth->execute($fromage->getArray());
            $good = true;
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
            $good = false;
        }
        return $good;
    }
}