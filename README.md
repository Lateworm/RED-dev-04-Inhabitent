# RED Starter

A custom WordPress theme and functionality for the fictitious Inhabitent Camping Supply Company. Based on a starter theme forked from Underscores.

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

This project uses gulp to compile SCSS and for browser-sync. Run `gulp` in `themes/tent`.

## Dev Tasks

### Baby Steps




- use add_action_pre_get_post to change the title at the top of product pages
- Add search to navbar (there's a specific wordpress function that can go in header.php)

- Set up Journal entries on frontpage
	- the_permalink, wp_count_comments

- Fix @package declarations
- Create content to be displayed in the Shop Stuff area
- complete about.php
- Figure out how to apply a certain css style to a certain element if on a certain page ?

### Major Goals

- Create _globals.scss
- Create any necessary template files
- Rename any functions prefixed by red_starter (there's a bunch in functions.php)

### Stretch Goals

- what page template files need to exist for adventures?
- Create a PHP template for custom the custom post type archive. archive-adventure.php, single-adventure.php
	- Archive.php would be a good palce to start.
	- Refer to template heirarchy diagram.
	- Name it the right thing and it should link up.  Will also need a new version of single.php for the custom post type.
- Get individual adventure pages working, with images
	- based off single.php but with the images like about.php (CFS will need to be included)

- Set up media queries?
- Create Adventures pages?
- Move the opening of .site-content from teh end of header.php to the top of something else... might be more elegant that the current solution in about.php. Or, build the creation of custom-hero into header.php, using an if to check if it exists.
- go responsive
- Hide featured image uploader on pages that use the CFS to upload the custom hero
- create a Contact Info widget

### Final steps for completion

- Run Theme Check Plugin before you submitting!
- Also, generally make sure that you're adhering to [WordPress' PHP Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/).
- customize the theme's screenshot and delete that other theme file that's still hangin' around

## Room for Improvement

- "Distraction-free writing mode" in Custom Field Suite's WYSIWYG doesn't work.
- Custom Field Suite's WYSIWYG doesn't provide an HTML view.


