<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','Completewebsite');
    $q = "SELECT * FROM `category` WHERE 1";
    $result = mysqli_query($conn,$q);
    $q1 = "SELECT * FROM `work` WHERE 1";
    $result1 = mysqli_query($conn,$q1);
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
                <li><a href="index.php">Home</a></li>
                <li><a href="Record.php">Post</a></li>
                <li><a href="#">Add category</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    <div>

        <!-- Add City and Drop City -->
        <div class="signIn">
            <form method="POST" action="Add_City_Data.php">
                <label>Add City</label>
                <input placeholder="Enter category" name="category" type="text">
                <input class="butt" placeholder="Submit" type="submit">
            </form><br>
            <form method="POST" action="Drop_City_Data.php">
                <label>Drop City</label>
                <select class="select" name="select">
                    <option selected>Select</option>
                    <?php while ( $row =mysqli_fetch_array($result)) {?>    
                        <option value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
                        <?php }?>
                </select>
                    <input class="butt" placeholder="Submit" type="submit">
            </form>
        </div>

        <!-- Add Work and Drop Work -->
        <div class="signIn">
            <form method="POST" action="Add_Work_Data.php">
                <label>Add Work</label>
                <input placeholder="Enter category" name="work" type="text">
                <input class="butt" placeholder="Submit" type="submit">
            </form><br>
            <form method="POST" action="Drop_Work_Data.php">
                <label>Drop Work</label>
                <select class="select" name="work">
                    <option selected>Select</option>
                    <?php while ( $row =mysqli_fetch_array($result1)) {?>    
                        <option value="<?php echo $row['work']; ?>"><?php echo $row['work']; ?></option>
                        <?php }?>
                </select>
                    <input class="butt" placeholder="Submit" type="submit">
            </form>
        </div>
    </div>
</body>
</html>