<?php
$recipe_index = intval($_GET["recipe_index"]);

if (!isset($recipe_index)) {
    die("Invalid url!");
}

$cookbook = simplexml_load_file("resources/cookbook.xml");
$recipe = $cookbook->recipe[$recipe_index];

include("config.php");
session_start();

$current_user = $_SESSION["active_user"];

$query = "SELECT * FROM comments WHERE recipe = '$recipe->title'";
    
$result = mysqli_query($db, $query) or die('Oops something broke! Please try again at a later time.');

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
		<?php if (isset($current_user)) {
                            ?>
		<form action="save_user_comment.php" method="post" class="user-comment-form">
			<input type="hidden" name="username" value="<?php echo $current_user; ?>" required />
			<input type="hidden" name="recipe" value="<?php echo $recipe->title; ?>" required />
			<input type="hidden" name="recipe_index" value="<?php echo $recipe_index; ?>" required />
				<label class="auth-form__label" for="comment">Write a comment:</label>
			<div class="user-comment-form__wrapper">
				<textarea type="text" name="comment" id="comment" class="user-comment-form__comment-input" required></textarea>
				<button type="submit" class="button">Submit comment</button>
			</div>
		</form>
		<?php
                        }?>
		<?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo '<form class="user-comment" method="post" action="delete_user_comment.php">';
                echo '<input type="hidden" name="id" value="'. $row["id"] . '" required />';
                echo '<input type="hidden" name="recipe_index" value="'. $recipe_index . '" required />';
                echo '<div class="user-comment__wrapper">';
                echo '<div class="user-comment__username">' . $row["username"] . '</div>';
                echo '<div class="user-comment__comment">' . $row["comment"] . '</div>';
                echo '</div>';
                if ($current_user === $row["username"]) {
                    echo '<button type="submit" class="button button--danger">Delete comment</button>';
                } else {
                    echo '<button type="submit" style="visibility:hidden" class="button button--danger">Delete comment</button>';
                }
                echo '</form>';
            }
        ?>
		</div>
	</div>
</body>

</html>