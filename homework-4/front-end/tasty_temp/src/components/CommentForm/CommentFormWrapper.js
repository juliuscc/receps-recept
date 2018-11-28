import React from 'react'
import CommentForm from './CommentForm'
import Login from './Login'

const Wrapper = ({ loggedInUser }) =>
	loggedInUser ? <CommentForm /> : <Login />

export default Wrapper
