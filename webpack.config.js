// webpack.config.js
const path = require( 'path' );
const HtmlWebpackPlugin = require('html-webpack-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
    context: __dirname,
     entry: [
        './resources/js/App.js',
        //'./resources/js/main.js',
        './resources/sass/app.scss'
    ],

    output: {
        path: path.resolve( __dirname, 'public' ),
        filename: 'js/App.js',
    },


    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /(node_modules|bower_components)/,
                loader: "babel-loader",
                options: {presets: ["@babel/env"]}
            },

            { test: /\.vue$/, use: 'vue-loader' },


            {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    {
                        loader: 'file-loader',
                        options: { outputPath: 'css/', name: '[name].css'}
                    },
                    'sass-loader'
                ]
            }

        ]
    },

    plugins: [
//    new HtmlWebpackPlugin({
//      template: './resources/views/indexVue.html',
//    }),
//    new VueLoaderPlugin(),
  ]


};


