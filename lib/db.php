<?php

class Database
{

    private $connection;

    private $host = 'localhost';
    private $username = 'root';
    private $password = '123456';

    private $db = 'erp';

    private static $instance;

    private function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);

        if (!$this->connection) {
            die(utf8_encode('<center>' . mysqli_error() . '</center>'));

            exit;
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
