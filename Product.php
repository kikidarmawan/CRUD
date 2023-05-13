<?php

require_once "Database.php";

class Product
{
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function tampil(string $table)
    {
        return $this->db->select($table);
    }
}
