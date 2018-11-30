import React from 'react'

const CommentList = ({ comments, loggedInUser, deleteComment }) =>
	comments.map(comment => (
		<Comment
			key={comment.id}
			comment={comment}
			loggedInUser={loggedInUser}
			deleteComment={deleteComment}
		/>
	))

const Comment = ({
	comment: { comment, id: comment_id, username, user_id },
	loggedInUser,
	deleteComment
}) => {
	return (
		<div className="user-comment">
			<div className="user-comment__wrapper">
				<div className="user-comment__username">{username}</div>
				<div className="user-comment__comment">{comment}</div>
			</div>
			<button
				type="submit"
				style={loggedInUser == user_id ? {} : { visibility: 'hidden' }}
				className="button button--danger"
				onClick={() => deleteComment(loggedInUser, comment_id)}
			>
				Delete comment
			</button>
		</div>
	)
}

export default CommentList
