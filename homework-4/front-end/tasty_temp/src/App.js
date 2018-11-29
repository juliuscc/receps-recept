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

		this.setState(({ loggedInUser }) => ({
			loggedInUser: 10
		}))
	}

	render() {
		return (
			<React.Fragment>
				<h2 className="user-comment-section__title">Comments</h2>
				<div className="user-comment-section__container">
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
						<div className="user-comment">Fetching comments...</div>
					)}
				</div>
			</React.Fragment>
		)
	}
}

export default App
