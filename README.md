# centro-axis
Basic Child Theme for Centro Axis Theme Framework: https://github.com/understrap/understrap

## How it works
Centro Axis Theme shares with the parent theme all PHP files and adds its own functions.php on top of the Centro Axis parent theme's functions.php.

**IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!** Instead it uses the Centro Axis Parent Theme as a dependency via npm and compiles its own CSS file from it.

Centro Axis Theme uses the Enqueue method to load and sort the CSS file the right way instead of the old @import method.

## Installation
1. Install the parent theme Centro Axis first: `https://github.com/understrap/understrap`
   - IMPORTANT: If you download Centro Axis from GitHub make sure you rename the "understrap-master.zip" file to "understrap.zip" or you might have problems using this child theme!
1. Upload the centro-axis folder to your wp-content/themes directory
1. Go into your WP admin backend 
1. Go to "Appearance -> Themes"
1. Activate the Centro Axis theme

## Editing
Add your own CSS styles to `/sass/theme/_child_theme.scss`
or import you own files into `/sass/theme/centro-axis.scss`

To overwrite Bootstrap's or Centro Axis's base variables just add your own value to:
`/sass/theme/_child_theme_variables.scss`

For example, the "$brand-primary" variable is used by both Bootstrap and Centro Axis.

Add your own color like: `$brand-primary: #ff6600;` in `/sass/theme/_child_theme_variables.scss` to overwrite it. This change will automatically apply to all elements that use the $brand-primary variable.

It will be outputted into:
`/css/centro-axis.min.css` and `/css/centro-axis.css`

So you have one clean CSS file at the end and just one request.

## Developing With NPM, Gulp, SASS and Browser Sync

### Installing Dependencies
- Make sure you have installed Node.js, Gulp, and Browser-Sync [1] on your computer globally
- Open your terminal and browse to the location of your Centro Axis copy
- Run: `$ npm install` then: `$ gulp copy-assets`

### Running
To work and compile your Sass files on the fly start:

- `$ gulp watch`

Or, to run with Browser-Sync:

- First change the browser-sync options to reflect your environment in the file `/gulpconfig.json` in the beginning of the file:
```javascript
  "browserSyncOptions" : {
    "proxy": "localhost/wordpress/",
    "notify": false
  }
};
```
- then run: `$ gulp watch-bs`

[1] Visit [https://browsersync.io/](https://browsersync.io/) for more information on Browser Sync
