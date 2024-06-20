<?php
class Model {
    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function query($sql) {
        return $this->db->query($sql);
    }

    public function escape($str) {
        return $this->db->real_escape_string($str);
    }
}
?>
