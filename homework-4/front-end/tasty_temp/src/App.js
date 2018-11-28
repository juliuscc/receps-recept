import React, { Component } from 'react'
import './App.css'
import Wrapper from './components/CommentForm/CommentFormWrapper'
import CommentList from './components/Comments/Comment'

class App extends Component {
	constructor(props) {
		super(props)

		this.state = { recipeId: 4, apiUrl: 'localhost:8888/api' }
	}

	componentDidMount() {
		setTimeout(() => {
			this.setState(({ comments }) => ({
				comments: [
					{
						comment: 'I love pancakes',
						commentId: 2,
						username: 'Julius',
						userId: 2
					},
					{
						comment: 'I also love pancakes!!',
						commentId: 3,
						username: 'Sara',
						userId: 5
					}
				]
			}))
		}, 1500)

		this.setState(({ loggedInUser }) => ({
			loggedInUser: 2
		}))
	}

	render() {
		return (
			<React.Fragment>
				<h2 class="user-comment-section__title">Comments</h2>
				<div class="user-comment-section__container">
					<Wrapper
						loggedInUser={this.state.loggedInUser}
						submitComment={this.submitComment}
						apiUrl={this.state.apiUrl}
					/>
					{this.state.comments ? (
						<CommentList
							comments={this.state.comments}
							loggedInUser={this.state.loggedInUser}
						/>
					) : (
						<div>Fetching comments...</div>
					)}
				</div>
			</React.Fragment>
		)
	}
}

export default App
