import React, { Component } from 'react'
import './App.css'
import Wrapper from './components/CommentForm/CommentFormWrapper'

class App extends Component {
	render() {
		return (
			<React.Fragment>
				<h2 class="user-comment-section__title">Comments</h2>
				<div class="user-comment-section__container">
					<Wrapper />
					{/* <form
						action="http://localhost:8888/index.php/comments/create"
						method="post"
						class="user-comment-form"
					>
						<input
							type="hidden"
							name="user_id"
							value="8"
							required
						/>
						<input
							type="hidden"
							name="recipe_id"
							value="4"
							required
						/>
						<input
							type="hidden"
							name="recipe_slug"
							value="pancakes"
							required
						/>
						<label class="auth-form__label" for="comment">
							Write a comment:
						</label>
						<div class="user-comment-form__wrapper">
							<textarea
								type="text"
								name="comment"
								id="comment"
								class="user-comment-form__comment-input"
								required
							/>
							<button type="submit" class="button">
								Submit comment
							</button>
						</div>
					</form> */}

					<form
						class="user-comment"
						method="post"
						action="http://localhost:8888/index.php/comments/delete"
					>
						<input
							type="hidden"
							name="comment_id"
							value="15"
							required
						/>
						<input
							type="hidden"
							name="recipe_id"
							value="4"
							required
						/>
						<input
							type="hidden"
							name="recipe_slug"
							value="pancakes"
							required
						/>
						<div class="user-comment__wrapper">
							<div class="user-comment__username">Sara</div>
							<div class="user-comment__comment">
								This recipe is great for me and my family!
							</div>
						</div>
						<button
							type="submit"
							style={{ visibility: 'hidden' }}
							class="button button--danger"
						>
							Delete comment
						</button>
					</form>

					<form
						class="user-comment"
						method="post"
						action="http://localhost:8888/index.php/comments/delete"
					>
						<input
							type="hidden"
							name="comment_id"
							value="17"
							required
						/>
						<input
							type="hidden"
							name="recipe_id"
							value="4"
							required
						/>
						<input
							type="hidden"
							name="recipe_slug"
							value="pancakes"
							required
						/>
						<div class="user-comment__wrapper">
							<div class="user-comment__username">Julius</div>
							<div class="user-comment__comment">
								I love pancakes!
							</div>
						</div>
						<button
							type="submit"
							style={{ visibility: 'hidden' }}
							class="button button--danger"
						>
							Delete comment
						</button>
					</form>
				</div>
			</React.Fragment>
		)
	}
}

export default App
