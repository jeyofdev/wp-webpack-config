# Generate assets using webpack when creating a wordpress theme.



## Tools

Check that [Nodejs](https://nodejs.org/en/download/) is installed :
```sh
$ node -v
```

Check that [Yarn](https://yarnpkg.com/en/docs/install) is installed :
```sh
$ yarn -v
```




## Add the theme to your wordpress site

Clone this repository in the themes folder of your wordpress site :
```sh
$ cd /yoursitepath/wp-content/themes
$ git clone git@github.com:jeyofdev/wp-webpack-config.git
```

Don't forget to activate your new theme.

Install all dependencies
```sh
$ cd /yoursitepath/wp-content/themes/yourthemename
$ yarn install
```

Set the proxyTarget property in ressources/compiler/config.js:
```js
module.exports = {
    ...
    proxyTarget: 'http://localhost:8000',
    ...
}
```



## Generate the assets
### Dev mode :
```sh
$ cd /yoursitepath/wp-content/themes/yourthemename
$ yarn start
```

### Production mode :
```sh
$ cd /yoursitepath/wp-content/themes/yourthemename
$ yarn build
```

### Production mode with manifest file and minified assets:
```sh
$ cd /yoursitepath/wp-content/themes/yourthemename
$ yarn build:production
```