import React, { Component } from 'react'
import CommentForm from './CommentForm'
import LoginOrRegister from './Login'

class Wrapper extends Component {
	render() {
		return this.props.loggedInUser ? (
			<CommentForm
				submitForm={this.props.submitComment}
				logout={this.props.logout}
			/>
		) : (
			<LoginOrRegister
				submitLogin={this.props.submitLogin}
				submitRegister={this.props.submitRegister}
			/>
		)
	}
}

export default Wrapper
