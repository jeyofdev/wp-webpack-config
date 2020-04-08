# Generate assets using webpack when creating a wordpress theme.


## Create a basic wordpress theme for testing

Clone this repository in the themes folder of your wordpress site
```sh
$ cd /yoursitepath/wp-content/themes
$ git clone git@github.com:jeyofdev/wp-webpack-config.git
```


To have articles to display, import the data from the file
```sh
$ data/datas.2020-04-08.xml
```


Import the navigation menu:
* Install and activate the 'Export Import Menus' plugin.
* Import the menu via the panel appearance/ Export/Import Menus then import the file data/wp_menus_main-menu_backup_08-04-2020.json
* In the menu panel
* * Change the url of the blog link to the home page 
* * Choose the location theme 'main navigation'


Activate the new theme.