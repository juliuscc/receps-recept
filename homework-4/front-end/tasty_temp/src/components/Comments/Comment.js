import React from 'react'

const CommentList = ({ comments, loggedInUser }) =>
	comments.map(comment => (
		<Comment
			key={comment.id}
			comment={comment}
			loggedInUser={loggedInUser}
		/>
	))

const Comment = ({ comment: { comment, username, user_id }, loggedInUser }) => (
	<div className="user-comment">
		<div className="user-comment__wrapper">
			<div className="user-comment__username">{username}</div>
			<div className="user-comment__comment">{comment}</div>
		</div>
		<button
			type="submit"
			style={loggedInUser == user_id ? {} : { visibility: 'hidden' }}
			className="button button--danger"
		>
			Delete comment
		</button>
	</div>
)

export default CommentList
