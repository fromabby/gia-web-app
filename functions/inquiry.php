<?php
    include "db_conn.php";
    class Inquiry{
        private $host="localhost";
        private $user = "root";
        private $pass = "";
        private $db = "phpproject";
        public $mysqli;
        public function __construct()
        {
            return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
        }
        public function contactUs($data){
            $fullName = $data['fullName'];
            $email = $data['email'];
            $contactNumber = $data['contactNumber'];
            $concernType = $data['concernType'];
            $message = $data['message'];

            $q="insert into inquiry set fullName='$fullName', email='$email', contactNumber='$contactNumber', concernType='$concernType', message='$message'";
            return $this->mysqli->query($q);
        }

        public function getInquiries(){
            $q = "SELECT * FROM inquiry";
            return $this->mysqli->query($q);
        }

        public function deleteInquiry($id){
            $q = "DELETE FROM inquiry WHERE inquiryId='$id'";
            return $this->mysqli->query($q);
        }

        public function getSingleInquiry($id){
            $q = "SELECT * FROM inquiry where inquiryId=$id" ;
            return $this->mysqli->query($q);
        }
    }