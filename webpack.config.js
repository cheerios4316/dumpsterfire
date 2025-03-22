const path = require('path');

module.exports = {
  mode: 'development', // Set to 'development' for easier debugging
  entry: './public/js/repos/dumpsterfire-components/src/js/Application.js',  // Adjust the path to your main file
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'public/dist'), // Adjust output directory
  },
  resolve: {
    extensions: ['.ts', '.js'], // Handle both .ts and .js files
  },
  module: {
    rules: [
      {
        test: /\.ts$/,  // Handle TypeScript files
        use: 'ts-loader',
        exclude: /node_modules/,
      },
    ],
  },
};
