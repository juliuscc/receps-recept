<?php
$cookbook = simplexml_load_file("resources/cookbook.xml");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php
    include("components/head.php");
    write_header("Receps Recept");
?>
</head>

<body>
	<header class="header header--index-page header--extra-tall">
		<h1 class="header__title">Receps Recept</h1>
	</header>
<?php
    include("components/navbar.php");
    write_navbar(0, "navbar--tighter", "button--mobile-smaller");
?>
	<div class="recipe-list">
		<h2 class="recipe-list__title">Featured recipes</h2>
		<div class="recipe-list__card-wrapper">
			<?php
                $index = 0;
                foreach ($cookbook->recipe as $recipe) {
                    echo <<<EOD
<a class="recipe-card" href="recipe_page.php?recipe_index=$index">
<img src="$recipe->imageurl" alt="$recipe->title" class="recipe-card__image">
<h3 class="recipe-card__title">$recipe->title</h3>
</a>
EOD;
                    $index++;
                }
            ?>
		</div>
	</div>
</body>

</html>