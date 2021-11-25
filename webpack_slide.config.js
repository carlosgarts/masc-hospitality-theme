const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const { VueLoaderPlugin } = require('vue-loader');

module.exports = {
    mode: 'production',
    entry: './src_slide/slider.js',
    output: {
        path: path.resolve(__dirname, 'dist_slide'),
    },
    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin( {
			filename: '[name].css',
			chunkFilename: '[id].css',
		} ),
        new VueLoaderPlugin(),
    ],
    resolve: {
        extensions: ['.js', 'jsx', 'vue'],
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/, // /\.m?js$/
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    // Translates CSS into CommonJS
                    "css-loader",
                    // Compiles Sass to CSS
                    {
                        loader: "sass-loader",
                        options: {
                           implementation: require('sass'),

                            webpackImporter: false,
                            sassOptions: {
                                includePaths: ['./node_modules']
                            },
                        },
                    },
                ],
            },
        ],  
    },
}