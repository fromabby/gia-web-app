<?php
    class Property{
        // Remote database connection
        private $host="remotemysql.com";
        private $user = "oVdipl3Crx";
        private $pass = "BxCIgGaNf6";
        private $db = "oVdipl3Crx";
        public $mysqli;
        public function __construct()
        {
            return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
        }
        public function createProperty($data,$imageFile){
            $name = $data['name'];
            $description = $data['description'];
            $location = $data['location'];
            $lotArea = $data['lotArea'];
            $price = $data['price'];
            $propertyType= $data['propertyType'];
            $image = $imageFile['image']['name'];

            $q="insert into property set name='$name', description='$description', location='$location', lotArea='$lotArea', price='$price', propertyType='$propertyType', image='$image'";
            return $this->mysqli->query($q);
        }
        public function getProperties(){
            $q = "SELECT * FROM property";
            return $this->mysqli->query($q);
        }
        public function getPropertiesOther($id){
            $q = "SELECT * FROM `property` WHERE `id` != $id";
            return $this->mysqli->query($q);
        }
        public function deleteProperty($id){
            $q = "DELETE FROM property WHERE id='$id'";
            return $this->mysqli->query($q);
        }
        public function updateProperty($data,$imageFile){
            $id = $_GET['update'];
            $name = $data['name'];
            $description = $data['description'];
            $location = $data['location'];
            $lotArea = $data['lotArea'];
            $price = $data['price'];
            $propertyType= $data['propertyType'];
            $image = $imageFile['image']['name'];

            $q="update `property` set id=$id,name='$name', description='$description', location='$location', lotArea='$lotArea', price='$price', propertyType='$propertyType', image='$image' where id='$id'";
            return $this->mysqli->query($q);
        }

        public function updatePropertyWithoutImage($data){
            $id = $_GET['update'];
            $name = $data['name'];
            $description = $data['description'];
            $location = $data['location'];
            $lotArea = $data['lotArea'];
            $price = $data['price'];
            $propertyType= $data['propertyType'];

            $q="update `property` set id=$id,name='$name', description='$description', location='$location', lotArea='$lotArea', price='$price', propertyType='$propertyType' where id='$id'";
            return $this->mysqli->query($q);
        }

        public function getSingleProperty(){
            if(isset($_POST['id'])) {
                $id = $_POST['id'];
                $q = "SELECT * FROM property WHERE id='$id'";
            } else {
                $id = $_GET['update'];
                $q = "SELECT * FROM property WHERE id='$id'";
            }
            
            return $this->mysqli->query($q);
        }

        public function displaySingleProperty(){
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                $q = "SELECT * FROM property WHERE id='$id'";
            }
            return $this->mysqli->query($q);
        }
    
    }
?>