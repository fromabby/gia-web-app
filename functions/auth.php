<?php
    include "db_conn.php";
    class User{
        private $host="localhost";
        private $user = "root";
        private $pass = "";
        private $db = "phpproject";
        public $mysqli;
        
        public function __construct()
        {
            return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
        }
        public function register($data){
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $email = $data['email'];
            $password = $data['password'];
            
            $q="insert into users set firstName='$firstName', lastName='$lastName', email='$email', password='$password'";
            return $this->mysqli->query($q);
        }

        public function getUsers(){
            $q = "SELECT * FROM users";
            return $this->mysqli->query($q);
        }

        public function updateUser($data){
            $email = $_GET['update'];
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $password = $data['password'];
            
            $q="update `users` set firstName='$firstName', lastName='$lastName', password='$password' where email='$email'";
            return $this->mysqli->query($q);
        }

        public function deleteUser($email){
            $q = "DELETE FROM users WHERE email='$email'";
            return $this->mysqli->query($q);
        }

        public function getSingleUser($email){
            $q = "SELECT * FROM `users` WHERE email='$email'";
            return $this->mysqli->query($q);
        }
    }