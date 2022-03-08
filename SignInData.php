<?php
        $conn = mysqli_connect('localhost','root','','CompleteWebsite');
        
        session_start();
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(empty($email) || empty($password) ){
                    echo "field cannot be empty";
                }else{
                    $sql = "select * from signup where email = '$email' limit 1";
                    $result = mysqli_query($conn,$sql);
                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);
                        if($user_data['password'] === $password){
                            $_SESSION['id']=$user_data['id'];
                            header("location:index.php");
                        }else{
                            echo "Email and password not Correct";
                        }
                    }
                }
            }    
?>