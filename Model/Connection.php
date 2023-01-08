<?php
    class Connection {
        private $host;
        private $dbname;
        private $username;
        private $password;
        private $db;
        public function __construct() {
            $this->host = 'mysql-agnesaziza.alwaysdata.net';
            $this->dbname = 'agnesaziza_users';
            $this->username = '294663';
            $this->password = 'agnesaziza';
            try
            {
                $this->db = new PDO('mysql:host=' . $this->host . ';dbname='
                . $this->dbname . ';charset=utf8', $this->username, $this->password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        }

        public function getDb() {
            return $this->db;
        }
    }
?>