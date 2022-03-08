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
    <title>Sign Up</title>
</head>
<body>
<div class="navbar">
        <ul>
            <li><a href="SignIn.php">Sign In</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Team.php">Team</a></li>
        </ul>
    </div>
    <div>
        <div class="signIn">
            <form method="POST" action="SignUpData.php">
                    <input placeholder="Enter First Name" name="firstName" type="text"><br>
                    <input placeholder="Enter Last Name" name="LastName" type="text"><br>
                    <input type="date" name="DOB"><br>
                    <input placeholder="Enter Email" type="email" name="Email" min="11" max="11"><br>
                    <input placeholder="Enter Password" name="password" type="password"><br>
                    <input placeholder="Confirm Password" name="cpassword" type="password"><br>
                    <input class="butt" placeholder="Submit" type="submit">
            </form>
        </div>
    </div>
</body>
</html>