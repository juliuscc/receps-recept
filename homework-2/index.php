<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("components/head.php");
    write_header("Receps Recept");
?>
</head>

<body>
	<header class="header header--extra-tall">
		<h1 class="header__title">Receps Recept</h1>
	</header>
	<nav class="navbar navbar--tighter">
		<input type="checkbox" id="navbar__mobile-btn">
		<label class="navbar__mobile-btn" for="navbar__mobile-btn">Menu</label>
		<div class="navbar__list-container">
			<a class="navbar__item navbar__item--active" href="/">
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
	<div class="recipe-list">
		<h2 class="recipe-list__title">Featured recipes</h2>
		<div class="recipe-list__card-wrapper">
			<a class="recipe-card" href="meatballs.php">
				<img src="resources/images/emiliano-vittoriosi-703094-unsplash.jpg" alt="Meatballs" class="recipe-card__image">
				<h3 class="recipe-card__title">Meatballs</h3>
			</a>
			<a class="recipe-card" href="pancakes.php">
				<img src="resources/images/blur-close-up-dairy-product-407041.jpg" alt="Pancakes" class="recipe-card__image">
				<h3 class="recipe-card__title">Pancakes</h3>
			</a>
		</div>
	</div>
</body>

</html>