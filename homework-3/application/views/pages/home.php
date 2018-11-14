<header class="header header--index-page header--extra-tall">
	<h1 class="header__title">Receps Recept</h1>
</header>

<?php echo $navbar; ?>

<div class="recipe-list">
	<h2 class="recipe-list__title">Featured recipes</h2>
	<div class="recipe-list__card-wrapper">
	<?php foreach ($recipes as $recipe): ?>

		<a class="recipe-card" href="<?php echo site_url('recipes/'.$recipe['slug']); ?>">
		<img src="/assets/images/<?php echo $recipe['image_url']; ?>" alt="<?php echo $recipe['title']; ?>" class="recipe-card__image">
		<h3 class="recipe-card__title"><?php echo $recipe['title']; ?></h3>
		</a>

	<?php endforeach; ?>
	</div>
</div>