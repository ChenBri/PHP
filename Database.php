<?php

class Database
{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $port;
    public $pdo;

    function __construct($host, $db, $user = "root", $pass = "", $port)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        $this->port = $port;

        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            die("Error connecting to the database: " . $err->getMessage());
        }
        $this->pdo = $pdo;
    }

    public function query($query, $params = [])
    {
        $stm = $this->pdo->prepare($query);
        $stm->execute($params);
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

$db = new Database($db_config['host'], $db_config['db'], $db_config['user'], $db_config['pass'], $db_config['port']);