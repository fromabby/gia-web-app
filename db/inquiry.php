<?php
    include_once "db_conn.php";
    abstract class BaseInquiry{
       public abstract function getInquiries();
       public abstract function contactUs($data);
       public abstract function deleteInquiry($id);
       public abstract function getSingleInquiry($id);
    }
    class Inquiry extends BaseInquiry{
        protected $mysqli;
        public function __construct(DBConnection $conn)
        {
            $this->mysqli = $conn->connectDb();
        }
        public function contactUs($data){
            $fullName = $data['fullName'];
            $email = $data['email'];
            $contactNumber = $data['contactNumber'];
            $concernType = $data['concernType'];
            $message = $data['message'];

            $q="INSERT INTO inquiry SET fullName='$fullName', email='$email', contactNumber='$contactNumber', concernType='$concernType', message='$message'";
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

    $obj = new Inquiry($db);