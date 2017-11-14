# RED Starter

A WordPress starter theme for RED Academy students, forked from Underscores.

## Installation

### 1. Download me (don't clone me!)

Then add me to your `wp-content` directory.

### 2. Rename the `redstarter-master` directory

Make sure that the theme directory name is project appropriate!

### 3. Install the dev dependencies

Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

### 5. Start the server

You'll need MAMP or something similar running.

### 6. Open the browser

This project uses gulp to compile SCSS and for browser-sync. Run `gulp`.

## Dev Tasks

- Figure out the nested grid for the footer ( maybe draw it out on paper)
- Create _globals.scss
- Create any necessary template files
- Set up media queries?
- Rename any functions prefixed by red_starter (there's a bunch in functions.php)
- Run Theme Check Plugin before you submitting!
- Also, generally make sure that you're adhering to [WordPress' PHP Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/).


