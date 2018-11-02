<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<a href="register.php">Register new user</a>
<?php
    session_start();
    $current_user = $_SESSION["login_user"];

    if (isset($current_user)) {
        echo "<p>Welcome user $current_user</p>";
        echo '<a href="logout.php">Log out</a>';
    } else {
        echo '<a href="login.php">Log in</a>';
    }
?>
</body>
</html>