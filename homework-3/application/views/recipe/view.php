<?php echo $navbar; ?>

	<header class="header" style="background-image: url('/assets/images/<?php echo $recipe_item['image_url'] ?>')">
		<h1 class="header__title"><?php echo $recipe_item['title'] ?></h1>
	</header>
	<div class="recipe-content">
		<div class="recipe-content__head">
			<div class="recipe-information">
				<span class="recipe-information__item recipe-information__item--right-divider"><?php echo $recipe_item['time'] ?></span>
				<span class="recipe-information__item"><?php echo $recipe_item['difficulty'] ?></span>
				<span class="recipe-information__item recipe-information__item--float--right"><?php echo $recipe_item['quantity'] ?></span>
				<p class="recipe-information__description"><?php echo $recipe_item['description'] ?></p>
			</div>
		</div>
		<div class="recipe-content__body">
			<div class="recipe-content__section--right recipe-content__section--top-mobile">
				<div class="ingredients-list">
					<h2 class="ingredients-list__title">Ingredients</h2>
					<ul class="ingredients-list__list">
						<?php
                            echo $recipe_item['ingredients'];
                            // foreach ($recipe_item->ingredient->li as $ingredient) {
                            //     echo '<li class="ingredients-list__list-item">' . $ingredient . '</li>';
                            // }
                        ?>
					</ul>
				</div>
			</div>
			<div class="recipe-content__section--left recipe-content__section--bottom-mobile">
				<div class="recipe-instructions">
					<h2 class="recipe-instructions__title">Instructions</h2>
					<ol class="recipe-instructions__list">
						<?php
                            echo $recipe_item['instructions'];
                            // foreach ($recipe_item->recipetext->li as $instruction) {
                            //     echo '<li class="recipe-instructions__list-item">' . $instruction . '</li>';
                            // }
                        ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="user-comment-section">
		<h2 class="user-comment-section__title">Comments</h2>
		<div class="user-comment-section__container">
		<?php
            // while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            //     echo '<form class="user-comment" method="post" action="delete_user_comment.php">';
            //     echo '<input type="hidden" name="id" value="'. $row["id"] . '" required />';
            //     echo '<input type="hidden" name="recipe_index" value="'. $recipe_index . '" required />';
            //     echo '<div class="user-comment__wrapper">';
            //     echo '<div class="user-comment__username">' . $row["username"] . '</div>';
            //     echo '<div class="user-comment__comment">' . $row["comment"] . '</div>';
            //     echo '</div>';
            //     if ($current_user === $row["username"]) {
            //         echo '<button type="submit" class="button button--danger">Delete comment</button>';
            //     } else {
            //         echo '<button type="submit" style="visibility:hidden" class="button button--danger">Delete comment</button>';
            //     }
            //     echo '</form>';
            // }
        ?>
		</div>
	</div>
