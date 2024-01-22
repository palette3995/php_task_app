<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

class DB {
    private $table;
    private $pdo;

    public function __construct($table) {
        $this->table = $table;

        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass =  $_ENV['DB_PASSWORD'];

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        } catch (PDOException $e) {
        die($e->getMessage());
        }
    }

    public function getAll() {
        $table = $this->table;
        $stmt = $this->pdo->query("SELECT * FROM $table");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}