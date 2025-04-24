const path = require('path');
const CssPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development', // Set to 'development' for easier debugging
  plugins: [new CssPlugin({filename: 'bundle.css'})],
  entry: './public/js/repos/dumpsterfire-pages/src/js/Application.js',  // Adjust the path to your main file
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'public/dist'), // Adjust output directory
  },
  ignoreWarnings: [
    {
      message: /Critical dependency: the request of a dependency is an expression/,
    },
  ],
  resolve: {
    extensions: ['.ts', '.js'], // Handle both .ts and .js files
    alias: {
      '@root': path.resolve(__dirname, '.'),
    },
  },
  module: {
    rules: [
      {
        test: /\.ts$/,  // Handle TypeScript files
        use: 'ts-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.css$/,
        use: [CssPlugin.loader, 'css-loader']
      }
    ],
  },
};
