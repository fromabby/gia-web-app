<?php
    include_once "db_conn.php";
     class BaseProperty{
        public  function getProperties(){
            echo "This is all the properties available";
        }
        public  function createProperty($data, $imageFile){
            echo "Property with data ($data) and image ($imageFile) created";
        }
        public  function deleteProperty($id){
            echo "Property with id ($id) deleted";
        }
    }
    class Property extends BaseProperty{
        // Remote database connection
        protected $mysqli;
        public function __construct(DBConnection $conn)
        {
            $this->mysqli = $conn->connectDb();
        }
        public function createProperty($data,$imageFile){
            $name = $data['name'];
            $description = $data['description'];
            $location = $data['location'];
            $lotArea = $data['lotArea'];
            $price = $data['price'];
            $propertyType= $data['propertyType'];
            $image = $imageFile['image']['name'];

            $q="INSERT INTO property SET name='$name', description='$description', location='$location', lotArea='$lotArea', price='$price', propertyType='$propertyType', image='$image'";
        
            return $this->mysqli->query($q);
        }
        public function getProperties(){
            $q = "SELECT * FROM property";
            return $this->mysqli->query($q);
        }

        public function getPropertiesOther($id){
            $q = "SELECT * FROM property WHERE id != '$id'";
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

            $q="UPDATE `property` SET id=$id,name='$name', description='$description', location='$location', lotArea='$lotArea', price='$price', propertyType='$propertyType', image='$image' WHERE id='$id'";
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

            $q="UPDATE `property` SET id=$id,name='$name', description='$description', location='$location', lotArea='$lotArea', price='$price', propertyType='$propertyType' WHERE id='$id'";
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

    $obj = new Property($db);
?>