<?php


namespace Model\Data;

use Model\Business\Fromage;

class daoFromage extends DBAL
{
    public function getFromage(int $idFromage) : Fromage
    {
        try {
            $sql = "select * from fromage where id = $idFromage";
            $sth = $this->pdo->query($sql);
            $sth->setFetchMode(\PDO::FETCH_CLASS, Fromage::class);
            $sth->execute();
            $result = $sth->fetch();
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
            $result = new Fromage();
        }
        return $result;
    }
    public function  getFromageList() : array
    {
        try {
            $sql = "select * from fromage";
            $sth = $this->pdo->query($sql);
            $sth->setFetchMode(\PDO::FETCH_CLASS, Fromage::class);
            $sth->execute();
            $result = $sth->fetchAll();
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
            $result = array();
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