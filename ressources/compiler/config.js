module.exports = {
    context: 'assets',
    entry: {
        styles: './styles/app.scss',
        scripts: './scripts/app.js'
    },
    devtool: 'cheap-module-eval-source-map',
    outputFolder: '../assets',
    publicFolder: 'assets',
    proxyTarget: 'http://localhost:3000',
    watch: [
        '../**/*.php'
    ]
}