<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("components/head.php");
    write_header("Pancakes - Recipes | Receps Recept");
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
			<a class="navbar__item navbar__item--active" href="pancakes.php">
				Pancakes
			</a>
		</div>
	</nav>
	<header class="header header--pancakes">
		<h1 class="header__title">Pancakes</h1>
	</header>
	<div class="recipe-content">
		<div class="recipe-content__head">
			<div class="recipe-information">
				<span class="recipe-information__item recipe-information__item--right-divider">0.5 hours</span>
				<span class="recipe-information__item">Easy</span>
				<span class="recipe-information__item recipe-information__item--float--right">4 Servings</span>
				<p class="recipe-information__description">
					This recipe is so delicious and easy to make. Serve with butter and maple syrup, or lingonberries if you've got
					them. A really classic Swedish traditional course!
				</p>
			</div>
		</div>
		<div class="recipe-content__body">
			<div class="recipe-content__section--right recipe-content__section--top-mobile">
				<div class="ingredients-list">
					<h2 class="ingredients-list__title">Ingredients</h2>
					<ul class="ingredients-list__list">
						<li class="ingredients-list__list-item">2 1/2 dl flour</li>
						<li class="ingredients-list__list-item">1/2 tsp salt</li>
						<li class="ingredients-list__list-item">6 dl milk</li>
						<li class="ingredients-list__list-item">3 eggs</li>
						<li class="ingredients-list__list-item">3 tbsp butter</li>
						<li class="ingredients-list__list-item">jam, berries or fruit for serving</li>
					</ul>
				</div>
			</div>
			<div class="recipe-content__section--left recipe-content__section--bottom-mobile">
				<div class="recipe-instructions">
					<h2 class="recipe-instructions__title">Instructions</h2>
					<ol class="recipe-instructions__list">
						<li class="recipe-instructions__list-item">
							Mix flour and salt in a bowl. Whip the mixture while poring in halve of the milk and mix until it is a smooth
							batter. Mix in the rest of the milk and the eggs.
						</li>
						<li class="recipe-instructions__list-item">
							Melt the butter in a frying pan and pour batter into the pan. Fry thin pancakes.
						</li>
						<li class="recipe-instructions__list-item">
							Serve with jam, berries or fruit.
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="user-comment-section">
		<h2 class="user-comment-section__title">Comments</h2>
		<div class="user-comment-section__container">
			<div class="user-comment">
				<div class="user-comment__username">Julius</div>
				<div class="user-comment__comment">My children made these for me and I was happy!</div>
			</div>
			<div class="user-comment">
				<div class="user-comment__username">Sara</div>
				<div class="user-comment__comment">They were a bit dry. I added some syrup to add flavour.</div>
			</div>
			<div class="user-comment">
				<div class="user-comment__username">Oskar</div>
				<div class="user-comment__comment">My grandfather always used to make these for me! &lt;3</div>
			</div>
		</div>
	</div>
</body>

</html>