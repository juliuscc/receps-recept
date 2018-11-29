import React, { Component } from 'react'
import './App.css'
import Wrapper from './components/CommentForm/CommentFormWrapper'
import CommentList from './components/Comments/Comment'

class App extends Component {
	constructor(props) {
		super(props)

		this.state = {
			recipeId: 4,
			apiUrl: 'http://localhost:8888/index.php/api'
		}
	}

	componentDidMount() {
		fetch(this.state.apiUrl + '/comments/' + this.state.recipeId)
			.then(response => response.json())
			.then(json => this.setState({ comments: json }))

		this.setState(() => ({
			loggedInUser: 10
		}))
	}

	submitComment = comment => {
		if (comment.length < 1) return

		const endpoint = this.state.apiUrl + '/comments/create'

		const postData = {
			comment,
			user_id: this.state.loggedInUser,
			recipe_id: this.state.recipeId
		}

		fetch(endpoint, {
			method: 'POST',
			body: JSON.stringify(postData)
		})
			.then(response => {
				if (response.ok) {
					return response.json()
				}
				throw new Error('Comment could not be uploaded')
			})
			.then(comment =>
				this.setState(state => {
					const comments = state.comments
					return { comments: [...comments, comment] }
				})
			)
			.catch(error => console.error(error))
	}

	render() {
		return (
			<React.Fragment>
				<h2 className="user-comment-section__title">Comments</h2>
				<div className="user-comment-section__container">
					<Wrapper
						loggedInUser={this.state.loggedInUser}
						apiUrl={this.state.apiUrl}
						submitComment={this.submitComment}
					/>
					{this.state.comments ? (
						<CommentList
							comments={this.state.comments}
							loggedInUser={this.state.loggedInUser}
						/>
					) : (
						<div className="user-comment">Fetching comments...</div>
					)}
				</div>
			</React.Fragment>
		)
	}
}

export default App
