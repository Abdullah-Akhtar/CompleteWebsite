<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','Completewebsite');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $work = $_POST['work'];
        $q = "DELETE FROM work WHERE work = '$work'";
        $result = mysqli_query($conn,$q);
        if(!$result){
            echo "Data has not been Deleted";
        }else{
            header("location:Add_City.php");
        }
    }
?>