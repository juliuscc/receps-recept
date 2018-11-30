import React, { Component } from 'react'

const NoSelection = ({ selectLogin, selectRegister }) => (
	<div className="auth-form auth-form--small">
		<p className="auth-form__text">
			Log in to Receps Recept or create an account to submit comments
		</p>
		<div className="auth-form__button-row">
			<button
				className="button button--margin"
				type="submit"
				onClick={selectLogin}
			>
				Log in
			</button>
			<button
				className="button button--margin"
				type="submit"
				onClick={selectRegister}
			>
				Register
			</button>
		</div>
	</div>
)

class LoginForm extends Component {
	constructor(props) {
		super(props)

		this.state = { username: '', password: '' }
	}

	updateUsername = event => {
		this.setState({ username: event.target.value })
	}

	updatePassword = event => {
		this.setState({ password: event.target.value })
	}

	render() {
		return (
			<div className="auth-form auth-form--small">
				<h3>Log in</h3>
				<p className="auth-form__text">
					Log in to Receps Recept or{' '}
					<a href="#" onClick={this.props.selectRegister}>
						create an account
					</a>
				</p>
				<label className="auth-form__label" htmlFor="username">
					Username:
				</label>
				<input
					className="auth-form__input"
					type="text"
					id="username"
					name="username"
					value={this.state.username}
					onChange={this.updateUsername}
					required
				/>
				<label className="auth-form__label" htmlFor="password">
					Password:
				</label>
				<input
					className="auth-form__input"
					type="password"
					id="password"
					name="password"
					value={this.state.password}
					onChange={this.updatePassword}
					required
				/>
				<button
					className="button button--place-right"
					type="submit"
					onClick={() => {
						this.props.submitLogin(
							this.state.username,
							this.state.password
						)
					}}
				>
					Log in
				</button>
			</div>
		)
	}
}

class LoginOrRegister extends Component {
	constructor(props) {
		super(props)

		this.state = { type: 'no-selection' }
	}

	selectLogin = () => {
		this.setState({ type: 'login' })
	}

	selectRegister = () => {
		this.setState({ type: 'register' })
	}

	render() {
		if (this.state.type === 'login') {
			return (
				<LoginForm
					selectRegister={this.selectRegister}
					submitLogin={this.props.submitLogin}
				/>
			)
		} else {
			return (
				<NoSelection
					selectLogin={this.selectLogin}
					selectRegister={this.selectRegister}
				/>
			)
		}
	}
}

export default LoginOrRegister
