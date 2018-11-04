<?php
function write_navbar($active_index, $extra_class_string = "", $extra_button_string = "", $login_visible = true)
{
    $cookbook = simplexml_load_file("resources/cookbook.xml");

    session_start();
    $current_user = $_SESSION["active_user"]; ?>
	<nav class="navbar <?php echo $extra_class_string; ?>">
		<input type="checkbox" id="navbar__mobile-btn">
		<label class="navbar__mobile-btn" for="navbar__mobile-btn">Menu</label>
		<div class="navbar__list-container">
			<a class="navbar__item <?php if ($active_index === 0) {
        echo "navbar__item--active";
    } ?>" href="/">
				Home
			</a>
			<a class="navbar__item <?php if ($active_index === 1) {
        echo "navbar__item--active";
    } ?>" href="calendar.php">
				Calendar
			</a>
			<?php
                $index = 0;
    foreach ($cookbook->recipe as $recipe) {
        if ($active_index === $index + 2) {
            echo <<<EOD
<a class="navbar__item navbar__item--active" href="recipe_page.php?recipe_index=$index">
	$recipe->title
</a>
EOD;
        } else {
            echo <<<EOD
<a class="navbar__item" href="recipe_page.php?recipe_index=$index">
	$recipe->title
</a>
EOD;
        }
        $index++;
    }
    
    if (isset($current_user)) {
        ?>
			<a class="button button--place-right button--stretch-mobile navbar__item--center-vertically <?php echo $extra_button_string; ?>" href="logout.php">Log out</a>
<?php
    } elseif ($login_visible) {
        ?>
			<a class="button button--place-right button--stretch-mobile navbar__item--center-vertically <?php echo $extra_button_string; ?>" href="login.php">Log in</a>
<?php
    } ?>

		</div>
	</nav>
<?php
}
