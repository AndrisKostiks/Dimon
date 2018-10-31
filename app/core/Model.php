<?php
/**
 * Created by PhpStorm.
 * User: Andris
 * Date: 7/14/2018
 * Time: 8:06 PM
 */

class Model
{
    const USERNAME="root";
    const PASSWORD="";
    const HOST="localhost";
    const DB="magebit";
    public function __construct()
    {
        echo 'Main Model!';
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
        return $connection;
    }
}