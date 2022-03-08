<?php
    include("SignInData.php");
    $conn = mysqli_connect('localhost','root','','CompleteWebsite');
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        $query = "select * from signup where id = '$id' limit 1";
        $result = mysqli_query($conn,$query);
        if($result){
            
        }else{
            header("location:SignIn.php");
        }
    }else{
        header("location:SignIn.php");
    }
    $q = "SELECT * FROM record WHERE 1 ";
    $result = mysqli_query($conn,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Index</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="Record.php">Post</a></li>
                <li><a href="Add_City.php">Add category</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="signIn">
        <div class="record">
            <label><h2>Post</h2></label>
            <table>
                <thead>
                    <tr>    
                        <th>
                        </th>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>   
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>City</th>
                        <th>Work</th>
                    </tr>                
                </thead>
                <tbody>
                    <?php while ( $row =mysqli_fetch_array($result)) {?>
                    <tr>
                        <td><?php echo $row['firstName']; ?></td>
                        <td><?php echo $row['lastName']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phoneNumber']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['work']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <div class="post">
        <div class="box">
            <p class="postTxt">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.
            </p>
        </div>
        <div class="box">
                <img class="img" src="2.jpg" width="100%" height="100">
        </div>
    </div> -->
</body>
</html>