const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const path = require('path');

const themePath = path.join(__dirname, '/');
const srcPath = path.join(themePath, 'src');
const jsPath = path.join(srcPath, 'js');
const cssPath = path.join(srcPath, 'styles');
const fontsPath = path.join(srcPath, 'fonts');

module.exports = {
  entry: {
    app: path.join(jsPath, 'app.js'),
    // style: path.join(cssPath, 'style.scss'),
  },
  output: {
    path: themePath,
    filename: 'dist/[name].js',
    assetModuleFilename: 'dist/fonts/[name][ext][query]',
  },
  // devtool: 'source-map',
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'dist/style.css',
      chunkFilename: '[id].css',
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      proxy: 'webcapitan',
      files: ['./**/*.php'],
      injectChanges: true,
    }),
    new CopyWebpackPlugin({
      patterns: [
        {
          from: path.join(jsPath, 'app.js'),
          to: 'dist/app.js',
        },
      ],
    }),
  ],
  module: {
    rules: [
      {
        test: /\.s?[c]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.sass$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'sass-loader',
            options: {
              sassOptions: { indentedSyntax: true },
            },
          },
        ],
      },
      {
        test: /\.(jpg|jpeg|png|gif|woff|woff2|eot|ttf|svg)$/i,
        type: 'asset/resource',
      },
    ],
  },
};
