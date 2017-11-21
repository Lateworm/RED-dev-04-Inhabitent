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

- create re-usable styles for clickthroughs
- Complete styling of archive-product.php, taxonomy-product-type.php, and single-product.php
- Create search results page and 404 page
- Make the cursor change when hovering over the magnifying glass.
- Move to 4-column layout on teh adventures group to solve asymmetry.
- Remove focus from the search form if the magnifyig glass is clicked while teh search form is expanded.
- Hide the visible bit of .search-form. It can't just be set to zero, that causes malfunctions with the sliding search field.
- enlarge the little tent


## Might Need a Little Help

- How can I check for CSS that isn't used?


## Final steps for completion

- Run Theme Check Plugin before submitting!
- Also, generally make sure that you're adhering to [WordPress' PHP Coding Standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/).
- customize the theme's screenshot and delete that other theme file that's still hangin' around
- Double check project requirements
- Be sure to test your project completely in all major browsers (Chrome, Firefox, Safari, Opera, Edge) when you think you’re finished


### Project Submission

- Refer to [submission instructions](https://red-wdp.herokuapp.com/project/project-4-inhabitent-site/)
- be sure gulp is turned off!!
- The plugin you need is the one with the birds, by Delicious Brains
- To use teh plugin go to tools > migrate DB, paste in the values from the above link and click export


## Stretch Goals

- Rename any functions prefixed by red_starter (there's a bunch in functions.php)

- what page template files need to exist for adventures?
- Create a PHP template for the custom post type archive. archive-adventure.php, single-adventure.php
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


## Learning Outcomes

- Choosing to create this site's layout using a CSS Grid proved to be a challenge. Many elements in the theme had to be moved around to flatten the heriarchy. In the starter theme, some elements were opened in one file and closed in another, so some parts on the DOM could not be flattening without modify many files.
- Semantics has been a problem throughout development, as some of the solutions required to make the grid work involved moving child elements out of their parents. I feel that these issues can be overcome with careful planning and experience.
- During this project I experienced a lot of frustration with things being organized in ways that seemed counterintuitive, incomplete, or sloppy.
- DOM structure in the base theme seemed incostistent, with parts of the tree having more depth than other. This means that when planning out how inheritance will work and how things will be nested, it is not possible to arrive at a consistent schema without flattening or expanding the heirarchy in certain areas. Even before these changes, the style nomenclature was erratic, mixing genus-species and species-genus names, and not taking advantage of the possibilty of an ancestor-derived nomenclature that would have obviated each class's position within the heirarchy. My own attempts to work through this have generally made things worse, as the road to hell begins at good intentions and soon arrives at time constraints. Ideally I would examing Underscores at some point in the future, map the DOM, and see if it really is as poorly laid out as it felt or if I was simply struggling against my own understanding.
- This project came with SASS partials organized in a particular manner. Perhaps I shoudl have taken time to explore this immediately and get a sense of where to write my styles, but instead I jumped right in and never did find the partials' organization to be  very satisfying. I've started to mvoe the porject toward a system of having a partial to go with each template. I'm still not sure what the best solution is, but I do feel that the scheme I was aiming for would be more intuitive for a large project than the scheme that was set up in the started theme.


## Room for Improvement

- "Distraction-free writing mode" in Custom Field Suite's WYSIWYG doesn't work.
- Custom Field Suite's WYSIWYG doesn't provide an HTML view.




