<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','Completewebsite');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $category = $_POST['select'];
        $q = "DELETE FROM category WHERE category = '$category'";
        $result = mysqli_query($conn,$q);
        if(!$result){
            echo "Data has not been Entered";
        }else{
            header("location:Add_City.php");
        }
    }
?>