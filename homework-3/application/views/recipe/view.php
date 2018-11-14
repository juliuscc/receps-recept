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
						<?php echo $recipe_item['ingredients']; ?>
					</ul>
				</div>
			</div>
			<div class="recipe-content__section--left recipe-content__section--bottom-mobile">
				<div class="recipe-instructions">
					<h2 class="recipe-instructions__title">Instructions</h2>
					<ol class="recipe-instructions__list">
						<?php echo $recipe_item['instructions']; ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="user-comment-section">
		<h2 class="user-comment-section__title">Comments</h2>
		<div class="user-comment-section__container">
		<?php foreach ($comments as $comment): ?>
			<form class="user-comment" method="post" action="delete_user_comment.php">
			<input type="hidden" name="id" value="<?php echo $comment->user_id; ?>" required />
			<input type="hidden" name="id" value="<?php echo $recipe_item['id']; ?>" required />
				<div class="user-comment__wrapper">
					<div class="user-comment__username"><?php echo $comment->username; ?></div>
					<div class="user-comment__comment"><?php echo $comment->comment; ?></div>
				</div>
				<button type="submit" style="visibility:hidden" class="button button--danger">Delete comment</button>
			</form>

		<?php endforeach; ?>
		</div>
	</div>
