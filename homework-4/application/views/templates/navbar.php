<nav class="navbar <?php echo $nav_extra_class; ?>">
	<input type="checkbox" id="navbar__mobile-btn" />
	<label class="navbar__mobile-btn" for="navbar__mobile-btn">Menu</label>
	<div class="navbar__list-container">
		<a class="navbar__item <?php if ($nav_active_index === 0) {
    echo 'navbar__item--active';
} ?>" href="<?php echo site_url('') ?>">
			Home
		</a>
		<a class="navbar__item <?php if ($nav_active_index === 1) {
    echo 'navbar__item--active';
} ?>" href="<?php echo site_url('calendar/') ?>">
			Calendar
		</a>
<?php

if (isset($logged_in_user)) {
    $login_link = site_url('auth/logout');
    $button_string = 'Log out';
} else {
    $login_link = site_url('auth/login');
    $button_string = 'Log in';
}
?>

		<a 
			class="button button--place-right button--stretch-mobile navbar__item--center-vertically <?php echo $nav_button_class; ?>" 
			href="<?php echo $login_link; ?>">
			<?php echo $button_string; ?>
		</a>
	</div>
</nav>