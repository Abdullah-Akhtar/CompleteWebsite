<?php
    session_start();
    if(isset($_SESSION['id'])){
        unset($_SESSION['id']);
        header("location:SignIn.php");
        die;
    }else{
        header("location:SignIn.php");
    }
    
?>