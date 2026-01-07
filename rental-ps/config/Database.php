<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "db_rental_ps";
    protected $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->user, $this->pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }
}