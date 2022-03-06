const path=require('path');
const htmlWebpackPlugin=require('html-webpack-plugin');
const webpack=require('webpack');

module.exports={
    entry: './src/main.js',
    output: {
        path: path.resolve(__dirname,'./dist'),
        filename: 'index_bundle.js',//这里需要改成index_bundle.js
        assetModuleFilename: 'imag/[hash][ext][query]'
    },
    mode: 'development',//开发者模式 需要配置
    devServer: {
        static: {
            directory: path.join(__dirname, 'src'),
        },
        compress: true,
        port: 3000,
        hot: true,
        open: true,
    },

    plugins: [
        new htmlWebpackPlugin({
            filename: 'index.html',
            template: path.join(__dirname,"./src/index.html")
        }),
        new webpack.ProvidePlugin({
          $: "jquery",
          jQuery: "jquery",
        })
    ],

    //第三方loader都需要在这里配置规则
    module:{
        rules: [
            {test: /\.css$/, use: ['style-loader', 'css-loader']},
            {test: /\.less$/, use: ['style-loader', 'css-loader', 'less-loader']},
            {test: /\.scss$/, use: ['style-loader', 'css-loader', 'sass-loader']},
            {test: /\.vue$/, use: ['vue-loader']},
            {test: /\.js$/, use: 'babel-loader', exclude:/node_modules/},
            // {test: /\.(png|jpg|gif|bmp|jpeg)$/, use: 'url-loader?limit=7631&name=[hash:8]-[name].[ext]'},
            {
                test: /\.(png|jpg|gif|bmp|jpeg)$/,
                dependency: { not: ['url'] },
                use: [
                    {
                      loader: 'url-loader',
                      options: {
                        limit: 1000,
                      },
                    },
                  ],
            }
        ]
    }
}