import React, { Component } from 'react'
import CommentForm from './CommentForm'
import Login from './Login'

class Wrapper extends Component {
	submitComment = () => {
		console.log(this.props.apiUrl)
	}

	render() {
		return this.props.loggedInUser ? (
			<CommentForm submitForm={this.submitComment} />
		) : (
			<Login />
		)
	}
}

export default Wrapper
