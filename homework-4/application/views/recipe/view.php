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
	<div class="user-comment-section" id="react-comment-app">
	</div>

	<script src="<?php echo base_url(); ?>assets/tasty-min.js" type="text/javascript"></script>
	<script>
		function initialise() 
		{
			const apiUrl = '<?php echo site_url('api'); ?>';
			const recipeId = <?php echo $recipe_item["id"]; ?>;
			const rootElement = document.getElementById("react-comment-app");

			console.log(rootElement)

			showApp(apiUrl, recipeId, rootElement);
		}

		const body = document.querySelector("body");
	  	body.onload = initialise;
	</script>