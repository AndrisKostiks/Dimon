<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 12/10/2018
 * Time: 7:59 PM
 */

class Database extends PDO
{
    const USERNAME="root";
    const PASSWORD="";
    const HOST="localhost";
    const DB="cool_db";
    const DSN="mysql";
    private $pdo;

    /**
     * Model constructor.
     */
    public function  __construct()
    {
        $dsn = self::DSN;
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        parent::__construct($dsn.':host='.$host.';dbname='.$db, $username, $password);
    }

    /**
     * @return PDO
     */
    public function getPdo()
    {
        return $this->pdo;
    }
    public function killPdo(){
        $this->pdo =null;
    }
}