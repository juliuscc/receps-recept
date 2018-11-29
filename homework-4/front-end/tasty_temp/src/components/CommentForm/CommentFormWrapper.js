import React, { Component } from 'react'
import CommentForm from './CommentForm'
import Login from './Login'

class Wrapper extends Component {
	// submitComment = comment => {
	// 	if (comment.length < 1) return

	// 	console.log(this.props.apiUrl)

	// 	const postData = {
	// 		comment,
	// 		user_id: this.props.loggedInUser,
	// 		recipe_id: this.props.recipeId
	// 	}

	// 	console.log(postData)
	// }

	render() {
		return this.props.loggedInUser ? (
			<CommentForm submitForm={this.props.submitComment} />
		) : (
			<Login />
		)
	}
}

export default Wrapper
