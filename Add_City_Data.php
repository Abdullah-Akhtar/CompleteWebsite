<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','Completewebsite');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $category = $_POST['category']; 
        $q = "INSERT INTO category (category) VALUES ('$category')";
        $result = mysqli_query($conn,$q);
        if(!$result){
            echo "Data has not been Entered";
        }else{
            header("location:Add_City.php");
        }
    }
?>