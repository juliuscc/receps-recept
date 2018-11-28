import React, { Component } from 'react'

class CommentForm extends Component {
	constructor(props) {
		super(props)

		this.state = { value: '' }
	}

	handleChange = event => {
		this.setState({ value: event.target.value })
	}

	render() {
		return (
			<div className="user-comment-form">
				<label className="auth-form__label" for="comment">
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
					>
						Submit comment
					</button>
				</div>
			</div>
		)
	}
}

export default CommentForm
