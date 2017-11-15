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

### Baby Steps

- In extras.php, enqueue a style that loads an image from CFS if we're on the front page.
- create page templates in page-templates folder
- Move local npm and gulp installation to wp-content or...
			- move this file to wp-content...
			- change instructions to include running gulp in themes/tent
- Define a new grid include for use in the footer

### Major Goals

- Create _globals.scss
- Create any necessary template files
- Rename any functions prefixed by red_starter (there's a bunch in functions.php)

### Stretch Goals

- Set up media queries?
- Create Adventures pages?
- Move the opening of .site-content from teh end of header.php to the top of something else... might be more elegant that the current solution in about.php. Or, build the creation of custom-hero into header.php, using an if to check if it exists.
- complete about.php

### Final steps for completion

- Run Theme Check Plugin before you submitting!
- Also, generally make sure that you're adhering to [WordPress' PHP Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/).

## Room for Improvement

- "Distraction-free writing mode" in Custom Field Suite's WYSIWYG doesn't work.
- Custom Field Suite's WYSIWYG doesn't provide an HTML view.


