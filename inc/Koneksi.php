<?php

namespace Inc;

class Koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=127.0.0.1;port=3307;dbname=pbwl_samples_5", "root", "");
    }
}

?>
