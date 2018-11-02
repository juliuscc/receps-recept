<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("components/head.php");
    write_header("Log in | Receps Recept");
?>
</head>

<body>
	<nav class="navbar">
		<input type="checkbox" id="navbar__mobile-btn">
		<label class="navbar__mobile-btn" for="navbar__mobile-btn">Menu</label>
		<div class="navbar__list-container">
			<a class="navbar__item" href="/">
				Home
			</a>
			<a class="navbar__item" href="calendar.php">
				Calendar
			</a>
			<a class="navbar__item" href="meatballs.php">
				Meatballs
			</a>
			<a class="navbar__item" href="pancakes.php">
				Pancakes
			</a>
			<a class="button button--place-right button--stretch-mobile navbar__item--center-vertically button--mobile-smaller" href="login.php">Log in</a>
		</div>
	</nav>
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
			<button class="button button--place-right" type="submit">Log in</button>
		</form>
	</div>
</body>

</html>