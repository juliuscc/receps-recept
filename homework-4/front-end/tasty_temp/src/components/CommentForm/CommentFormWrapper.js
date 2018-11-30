import React, { Component } from 'react'
import CommentForm from './CommentForm'
import LoginOrRegister from './Login'

class Wrapper extends Component {
	render() {
		return this.props.loggedInUser ? (
			<CommentForm submitForm={this.props.submitComment} />
		) : (
			<LoginOrRegister submitLogin={this.props.submitLogin} />
		)
	}
}

export default Wrapper
