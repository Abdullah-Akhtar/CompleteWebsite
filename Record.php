<?php 
    $conn = mysqli_connect('localhost','root','','Completewebsite');
    $q = "SELECT * FROM `category`";
    $result = mysqli_query($conn,$q);
    $q1 = "SELECT * FROM work";
    $result1 = mysqli_query($conn,$q1);
?>
<!DOCTYPE html>
<ht lang="en">
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
        <div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Post</a></li>
                <li><a href="Add_City.php">Add category</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="signIn">
            <form method="POST" action="Record_Data.php">
                <input placeholder="Enter First Name" name="firstName" type="text"><br>
                <input placeholder="Enter Last Name" name="lastName" type="text"><br>
                <input placeholder="Email" name="email" type="email"><br>
                <input placeholder="Enter Phone Number" name="phone" type="number"><br>
                <select class="select" name="city">
                <option selected>Select City</option>
                <?php while ( $row =mysqli_fetch_array($result)) {?>    
                    <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                    <?php }?>
                </select><br>
                <select class="select" name="work">
                <option selected>Select Work type</option>
                <?php while ( $row =mysqli_fetch_array($result1)) {?>    
                    <option value="<?php echo $row['work']; ?>"><?php echo $row['work']; ?></option>
                    <?php }?>
                </select><br>
                <input class="butt" placeholder="Submit" type="submit">
            </form>
        </div>
    </div>
</body>
</html>