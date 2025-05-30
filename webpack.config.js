const path = require('path');
const CssPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development',
  plugins: [new CssPlugin({filename: 'bundle.css'})],
  entry: './public/js/repos/dumpsterfire-pages/src/js/Application.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'public/dist'),
  },
  ignoreWarnings: [
    {
      message: /Critical dependency: the request of a dependency is an expression/,
    },
  ],
  resolve: {
    extensions: ['.ts', '.js'],
    alias: {
      '@root': path.resolve(__dirname, './repos/dumpsterfire-pages/src/js'),
      '@vendor': path.resolve(__dirname, './repos'),
    },
  },
  module: {
    rules: [
      {
        test: /\.ts$/,
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
