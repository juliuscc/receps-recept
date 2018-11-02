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
<?php
    include("components/navbar.php");
    write_navbar(0, "navbar--tighter", "button--mobile-smaller");
?>
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