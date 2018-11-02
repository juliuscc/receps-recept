<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("components/head.php");
    write_header("Meatballs - Recipes | Receps Recept");
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
			<a class="navbar__item navbar__item--active" href="meatballs.php">
				Meatballs
			</a>
			<a class="navbar__item" href="pancakes.php">
				Pancakes
			</a>
		</div>
	</nav>
	<header class="header header--meetballs">
		<h1 class="header__title">Swedish Meatballs</h1>
	</header>
	<div class="recipe-content">
		<div class="recipe-content__head">
			<div class="recipe-information">
				<span class="recipe-information__item recipe-information__item--right-divider">1 hour</span>
				<span class="recipe-information__item">Medium</span>
				<span class="recipe-information__item recipe-information__item--float--right">8 Servings</span>
				<p class="recipe-information__description">
					This is a great meal that will be very sucessful at the next potluck. It is a traditional swedish dish that is
					served at every IKEA in the world. The legend says that the meatball originates from Turkey and was brought to
					Sweden in the 18th century.
				</p>
			</div>
		</div>
		<div class="recipe-content__body">
			<div class="recipe-content__section--right recipe-content__section--top-mobile">
				<div class="ingredients-list">
					<h2 class="ingredients-list__title">Ingredients</h2>
					<ul class="ingredients-list__list">
						<li class="ingredients-list__list-item">1 1/2 dl milk</li>
						<li class="ingredients-list__list-item">5 tbsp bread crumbs</li>
						<li class="ingredients-list__list-item">500g ground meat</li>
						<li class="ingredients-list__list-item">1/2 yellow onion (peeled and grated)</li>
						<li class="ingredients-list__list-item">1 egg</li>
						<li class="ingredients-list__list-item">1 tsp salt</li>
						<li class="ingredients-list__list-item">1 qt black pepper</li>
						<li class="ingredients-list__list-item">1/2 tsp sugar</li>
						<li class="ingredients-list__list-item">butter or margarine</li>
					</ul>
				</div>
			</div>
			<div class="recipe-content__section--left recipe-content__section--bottom-mobile">
				<div class="recipe-instructions">
					<h2 class="recipe-instructions__title">Instructions</h2>
					<ol class="recipe-instructions__list">
						<li class="recipe-instructions__list-item">
							Mix milk and bread crumbs. Let swell for 10 minutes. Add ground meat, onion, egg, salt, black pepper, and sugar
							to the bread crumb mix. Work the mix.
						</li>
						<li class="recipe-instructions__list-item">
							Moist the hands with cold water and form the meat balls. Fry a couple at a time in cooking oil, shake the pan at
							regular intervals so that the meatballs roll around and keeps it's round shape.
						</li>
						<li class="recipe-instructions__list-item">
							Serve the meatballs with boiled potatoes or mashed potatoes and lingonberry jam.
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
				<div class="user-comment__comment">I made this for my children and they were happy!</div>
			</div>
			<div class="user-comment">
				<div class="user-comment__username">Sara</div>
				<div class="user-comment__comment">They were a bit dry. I added some bbq-sauce to add flavour.</div>
			</div>
			<div class="user-comment">
				<div class="user-comment__username">Oskar</div>
				<div class="user-comment__comment">My grandmother always used to make these for me! &lt;3</div>
			</div>
		</div>
	</div>
</body>

</html>