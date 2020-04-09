# Generate assets using webpack when creating a wordpress theme.



## Add some datas

To have articles to display, import the data from this file
```sh
$ data/datas.2020-04-08.xml
```

Import the navigation menu:
* Install and activate the 'Export Import Menus' plugin.
* Import the menu via the panel appearance/ Export/Import Menus then import the file data/wp_menus_main-menu_backup_08-04-2020.json
* In the menu panel
* * Change the url of the blog link to the home page 
* * Choose the location theme 'main navigation'




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
$ cd /yoursitepath/wp-content/themes/yourthemename/ressources
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
$ cd /yoursitepath/wp-content/themes/yourthemename/ressources
$ yarn run start
```

### Production mode :
```sh
$ cd /yoursitepath/wp-content/themes/yourthemename/ressources
$ yarn run build
```