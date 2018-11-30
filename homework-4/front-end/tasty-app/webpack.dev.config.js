module.exports = {
	entry: './App.js',
	output: {
		libraryTarget: 'var',
		library: 'showApp',
		path: 'builds',
		filename: 'tasty.js'
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
