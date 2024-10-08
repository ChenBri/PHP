<?php
class Database
{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $port;
    public $pdo;

    const FETCH_ALL = 'ALL';
    const FETCH_SINGLE = 'SINGLE';

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

    public function query($query, $params = [], $fetchMode = self::FETCH_ALL)
    {
        $stm = $this->pdo->prepare($query);
        $stm->execute($params);

        if ($fetchMode === self::FETCH_SINGLE) {
            $result = $stm->fetch(PDO::FETCH_ASSOC);
        } else {
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        }

        return $result;
    }
}
