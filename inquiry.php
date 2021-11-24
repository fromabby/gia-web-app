<?php
    include_once './functions/inquiry.php';
    $obj = new Inquiry();
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $del = $obj->deleteInquiry($id);
        if($del){
            header("Location: inquiries_table.php");
        }else{
            echo "Error";
        }
    }
?>