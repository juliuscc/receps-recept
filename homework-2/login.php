<?php
$error = false;

include("config.php");
session_start();

$current_user = $_SESSION["active_user"];

if (isset($current_user)) {
    header("Location: index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    
    $result = mysqli_query($db, $query) or die('Oops something broke! Please try again at a later time.');
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['active_user'] = $username;
        header("location: index.php");
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("components/head.php");
    write_header("Log in | Receps Recept");
?>
</head>

<body>
<?php
    include("components/navbar.php");
    write_navbar(-1, "", "", false);
?>
	<header class="header header--simple">
		<h1 class="header__title header__title--dark">Log in</h1>
	</header>
	<div class="container">
		<form action="login.php" method="post" class="auth-form">
			<p class="auth-form__text">Log in to Receps Recept or <a href="register.php">create an account</a></p>
			<label class="auth-form__label" for="username">Username:</label>
			<input class="auth-form__input" type="text" id="username" name="username" required>
			<label class="auth-form__label" for="password">Password:</label>
			<input class="auth-form__input" type="password" id="password" name="password" required>
<?php if ($error) {
    echo '<div class="auth-form__error-text">Oops, that\'s not a match!</div>';
}?>
			<button class="button button--place-right" type="submit">Log in</button>
		</form>
	</div>
</body>

</html>