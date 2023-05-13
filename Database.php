<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pwd6');
define('DB_PORT', 3306);

class Database
{

    public mysqli $mysqli;

    public function __construct()
    {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);

        if ($this->mysqli->connect_errno) {
            echo "Gagal koneksi ke database" . " " . $this->mysqli->connect_error;
        };
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

    public function select(string $table, ?string $where = null)
    {
        $sql = "SELECT * FROM $table";

        $result = $this->mysqli->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
