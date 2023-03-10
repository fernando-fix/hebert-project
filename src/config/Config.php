<?php
namespace src\config;
use PDO;

session_start();

class Config {
    public $base = 'http://localhost/hebert-project';
    public $connection;

    private $db_host = 'localhost';
    private $db_name = 'ativos';
    private $db_user = 'root';
    private $db_pass = '';

    public function __construct() {
        $this->connection = new PDO("mysql:dbname=$this->db_name;host=$this->db_host", $this->db_user, $this->db_pass);
    }
}
