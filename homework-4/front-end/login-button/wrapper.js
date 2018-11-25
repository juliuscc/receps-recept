import React from 'react'
import ReactDOM from 'react-dom'

const showLoginButton = element => {
	ReactDOM.render(
		<a
			class="button button--place-right button--stretch-mobile navbar__item--center-vertically button--mobile-smaller"
			href="http://localhost:8888/index.php/auth/logout"
		>
			Log out
		</a>,
		element
	)
}

module.exports = showLoginButton
