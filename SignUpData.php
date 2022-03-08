<?php
use MongoDB\Driver\Query;
    $conn = mysqli_connect('localhost','root','','CompleteWebsite');
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['LastName'];
        $DOB = $_POST['DOB'];
        $email = $_POST['Email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        if(empty($firstName) || empty($lastName) || empty($DOB) || 
        empty($email) || empty($password) || empty($cpassword)){
            echo "Field cannot be empty";
        }else{
            
            if($password != $cpassword){
                echo "Password not match";
            }else{
            
            $check = "Select * from signup where email = '$email' limit 1";
            $result = mysqli_query($conn,$check);
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['email'] === $email){
                echo "Email already exist";
            }else{
                
                if(is_numeric($firstName) || is_numeric($lastName)){
                    echo "First name and last name cannot be numeric";
                }else{
                $sql = "insert into signUp (firstName,lastName,DOB,email,password) values 
                ('$firstName','$lastName','$DOB','$email','$password')";
                if ($conn->query($sql) === TRUE) {
                    header("location:SignIn.php");
                }else{
                    echo "Data Does not store";
                }
                }
                }
                }
            }
    }
?>