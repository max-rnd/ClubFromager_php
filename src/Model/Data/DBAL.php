<?php


namespace Model\Data;


abstract class DBAL
{
    // protected $objLog;
    protected $pdo;

    /**
     * DBAL constructor.
     */
    public function __construct()
    {
        $settings = require $_SERVER['DOCUMENT_ROOT'] . '/config/db_config.php';
        $username = $settings["username"];
        $password = $settings["password"];
        $dbname = $settings["dbname"];

        // $this->objLog = new \util\log();
        try {
            $this->pdo = new \PDO("mysql:host=localhost;dbname=$dbname;charset=UTF8",$username,$password);
            $this->pdo->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch (\PDOException $e) {
            // $this->objLog->insertErrException($e);
            echo $e->getMessage();
            die();
        }
    }

    /**
     * @return \PDO
     */
    protected function getPdo() : \PDO
    {
        return $this->pdo;
    }

    /**
     * @param \PDO $pdo
     */
    protected function setPdo(\PDO $pdo): void
    {
        $this->pdo = $pdo;
    }

}