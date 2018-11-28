import React from 'react'

const CommentList = ({ comments, loggedInUser }) =>
	comments.map(comment => (
		<Comment comment={comment} loggedInUser={loggedInUser} />
	))

const Comment = ({ comment: { comment, username, userId }, loggedInUser }) => (
	<div className="user-comment">
		<div class="user-comment__wrapper">
			<div class="user-comment__username">{username}</div>
			<div class="user-comment__comment">{comment}</div>
		</div>
		<button
			type="submit"
			style={loggedInUser === userId ? { visibility: 'hidden' } : {}}
			class="button button--danger"
		>
			Delete comment
		</button>
	</div>
)

export default CommentList
