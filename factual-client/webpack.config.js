const path = require('path');
const webpack = require('webpack');

module.exports = {
  context: path.resolve(__dirname, './src'),
  entry: {
    'factual-client': './js/factual-partner.js',
  },
  module: {
    rules: [
      {
        test: /\.(sass|scss)$/,
        use: [
          'style-loader',
          'css-loader',
          'sass-loader',
        ]
      },
      {
        test: /\.html$/,
        use: 'raw-loader',
      },
      {
        test: /\.png$/,
        use: 'url-loader?limit=10000&name=assets/[name].[ext]',          
      },
    ],
  },
  plugins: [
    new webpack.ProvidePlugin({
      _: 'lodash',
      $: 'jquery',
      jQuery: 'jquery',
      Promise: 'bluebird',
    }),
  ],
  output: {
    path: path.resolve(__dirname, '../'),
    filename: '[name].bundle.js',
  },
};