<?php
$recipe_index = intval($_GET["recipe_index"]);

if (!isset($recipe_index)) {
    die("Invalid url!");
}

$cookbook = simplexml_load_file("resources/cookbook.xml");
$recipe = $cookbook->recipe[$recipe_index];

include("config.php");
session_start();

$current_user = $_SESSION["active_user"] or "";

// echo "Hello" . $current_user;

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("components/head.php");
    write_header("$recipe->title - Recipes | Receps Recept");
?>
</head>

<body>
<?php
    include("components/navbar.php");
    write_navbar($recipe_index + 2, "");
?>
	<header class="header" style="background-image: url(<?php echo $recipe->imageurl?>)">
		<h1 class="header__title"><?php echo $recipe->title ?></h1>
	</header>
	<div class="recipe-content">
		<div class="recipe-content__head">
			<div class="recipe-information">
				<span class="recipe-information__item recipe-information__item--right-divider"><?php echo $recipe->totaltime ?></span>
				<span class="recipe-information__item"><?php echo $recipe->rating ?></span>
				<span class="recipe-information__item recipe-information__item--float--right"><?php echo $recipe->quantity ?></span>
				<p class="recipe-information__description"><?php echo $recipe->description ?></p>
			</div>
		</div>
		<div class="recipe-content__body">
			<div class="recipe-content__section--right recipe-content__section--top-mobile">
				<div class="ingredients-list">
					<h2 class="ingredients-list__title">Ingredients</h2>
					<ul class="ingredients-list__list">
						<?php
                            foreach ($recipe->ingredient->li as $ingredient) {
                                echo '<li class="ingredients-list__list-item">' . $ingredient . '</li>';
                            }
                        ?>
					</ul>
				</div>
			</div>
			<div class="recipe-content__section--left recipe-content__section--bottom-mobile">
				<div class="recipe-instructions">
					<h2 class="recipe-instructions__title">Instructions</h2>
					<ol class="recipe-instructions__list">
						<?php
                            foreach ($recipe->recipetext->li as $instruction) {
                                echo '<li class="recipe-instructions__list-item">' . $instruction . '</li>';
                            }
                        ?>
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