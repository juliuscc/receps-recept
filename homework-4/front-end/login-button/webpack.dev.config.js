module.exports = {
	entry: './wrapper.js',
	output: {
		libraryTarget: 'var',
		library: 'showLoginButton',
		path: 'builds',
		filename: 'login-button.js'
	},
	module: {
		loaders: [
			{
				test: /\.js/,
				loader: 'babel',
				include: __dirname
			}
		]
	}
}
