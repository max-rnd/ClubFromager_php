<?php


namespace Model\Data;


use Model\Business\Pays;

class daoPays extends DBAL
{
    public function getPays(int $idPays) : Pays
    {
        try {
            $sql = "select * from pays where id = $idPays";
            $sth = $this->pdo->query($sql);
            // $sth->setFetchMode(\PDO::FETCH_CLASS,Pays::class);
            $sth->execute();
            $row = $sth->fetch();
            $result = new Pays($row);
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
            $result = new Pays();
        }
        return $result;
    }

    public function getAllPays() : array
    {
        try {
            $sql = "select * from pays";
            $sth = $this->pdo->query($sql);
            //$sth->setFetchMode(\PDO::FETCH_CLASS,Pays::class);
            $sth->execute();
            $tab = $sth->fetchAll();
            $result = array();
            foreach ($tab as $row)
            {
                array_push($tab,new Pays($row));
            }
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
            $result = new Pays();
        }
        return $result;
    }
}