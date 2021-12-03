<?php
    // For development

    // Remote database connection
    // $host="remotemysql.com";
    // $user = "oVdipl3Crx";
    // $pass = "BxCIgGaNf6";
    // $db = "oVdipl3Crx";

    //local connection
    // private $host="localhost";
    // private $user = "root";
    // private $pass = "";
    // private $db = "phpproject";

    class DBConnection {
        protected $mysqli;
        private $host="remotemysql.com";
        private $user = "oVdipl3Crx";
        private $pass = "BxCIgGaNf6";
        private $db = "oVdipl3Crx";

        public function __construct()
        {
            $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);

            return $this->mysqli;
        }

        public function connectDb() {
            return $this->mysqli;
        }
    }

    $db = new DBConnection();
?>