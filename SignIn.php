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
    <title>Sign In</title>
</head>
<body>
<div class="navbar">
        <ul>
            <li><a href="#">Sign In</a></li>
            <li><a href="SignUp.php">Sign Up</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Team.php">Team</a></li>
        </ul>
    </div>
    <div>
        <div class="signIn">
            <form method="POST" action="SignInData.php">
                    <input placeholder="Enter Email" name="email" type="email"><br> 
                    <input placeholder="Enter Password" name="password" type="password"><br>
                    <input placeholder="Sign In" name="signIn" value="signIn" class="butt" type="submit">
            </form>
        </div>
    </div>
</body>
</html>