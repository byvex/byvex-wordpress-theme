const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

let mode = "development";
if (process.env.NODE_ENV == "production") {
  mode = "production";
}

module.exports = {
  mode: mode,
  target: "web",
  devtool: false,

  output: {
    filename: "js/bootstrap.min.js",
    path: path.resolve(__dirname, "assets")
  },

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"]
          }
        }
      },
      {
        test: /\.(s[ac]|c)ss$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader", "postcss-loader", "sass-loader"]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/i,
        type: "asset/resource",
      }
    ]
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: "css/bootstrap.min.css",
    }),
  ],

};
