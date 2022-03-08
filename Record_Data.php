<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','Completewebsite');
    $id = $_SESSION['id'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $work = $_POST['work'];

        if(empty($firstName) || empty($lastName) || empty($email) || 
        empty($phone) || empty($city) || empty($work)){
            echo "Field cannot be empty";
        }else{
            $q = "INSERT INTO `record`(`user_id`, `firstName`, `lastName`, `phoneNumber`, `city`, `work`, `email`) 
            VALUES ('$id','$firstName','$lastName','$phone','$city','$work','$email')";
            $result = mysqli_query($conn,$q);
            header("location:index.php");
        }
    }
?>