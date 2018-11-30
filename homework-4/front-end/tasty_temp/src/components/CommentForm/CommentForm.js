import React, { Component } from 'react'

class CommentForm extends Component {
	constructor(props) {
		super(props)

		this.submitForm = props.submitForm
		this.state = { value: '' }
	}

	handleChange = event => {
		this.setState({ value: event.target.value })
	}

	render() {
		return (
			<div className="user-comment-form">
				<label className="auth-form__label" htmlFor="comment">
					Write a comment:
				</label>
				<div className="user-comment-form__wrapper">
					<textarea
						type="text"
						name="comment"
						id="comment"
						className="user-comment-form__comment-input"
						value={this.state.value}
						onChange={this.handleChange}
					/>
					<button
						type="submit"
						className="button"
						disabled={!this.state.value}
						onClick={() => {
							this.setState({ value: '' })
							this.submitForm(this.state.value)
						}}
					>
						Submit comment
					</button>
				</div>
				<button
					className="button button--margin"
					onClick={this.props.logout}
				>
					Log out
				</button>
			</div>
		)
	}
}

export default CommentForm
