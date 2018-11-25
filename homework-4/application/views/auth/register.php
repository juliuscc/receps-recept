<?php echo $navbar; ?>

<header class="header header--simple">
		<h1 class="header__title header__title--dark">Register</h1>
	</header>
	<div class="container">
		<form action="<?php echo site_url('auth/register'); ?>" method="post" class="auth-form">
			<p class="auth-form__text">Register a new user to Receps Recept. Do you already have an account? <a href="<?php echo site_url('auth/login'); ?>">Log in here.</a></p>
			<label class="auth-form__label" for="username">Username:</label>
			<input class="auth-form__input" type="text" id="username" name="username" required>
			<label class="auth-form__label" for="password">Password:</label>
			<input class="auth-form__input" type="password" id="password" name="password" required>
<?php if (isset($error)) {
    echo '<div class="auth-form__error-text">' . $error . '</div>';
}?>
			<button class="button button--place-right" type="submit">Register</button>
		</form>
	</div>