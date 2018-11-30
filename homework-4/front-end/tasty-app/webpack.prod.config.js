const webpack = require('webpack')

module.exports = {
	entry: './App.js',
	output: {
		libraryTarget: 'var',
		library: 'showApp',
		path: 'builds',
		filename: 'tasty-min.js'
	},
	module: {
		loaders: [
			{
				test: /\.js/,
				loader: 'babel',
				include: __dirname
			}
		]
	},
	plugins: [
		new webpack.DefinePlugin({
			'process.env': {
				NODE_ENV: JSON.stringify('production')
			}
		})
	]
}
