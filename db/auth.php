<?php
    include "db_conn.php";
    class User{
        // Remote database connection
        protected $mysqli;
        public function __construct(DBConnection $conn)
        {
            $this->mysqli = $conn->connectDb();
        }

        public function login($email, $password) {
            $q = "SELECT * FROM `users` WHERE email='$email' AND `password`='$password'";

            return $this->mysqli->query(($q));
        }
        public function register($data){
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $email = $data['email'];
            $password = $data['password'];
            
            $q="INSERT INTO users SET firstName='$firstName', lastName='$lastName', email='$email', password='$password'";
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
            
            $q="UPDATE `users` SET firstName='$firstName', lastName='$lastName', password='$password' WHERE email='$email'";
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

    $obj = new User($db);