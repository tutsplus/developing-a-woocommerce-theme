# Developing a WooCommerce Theme

Learn how to create a custom theme for a WooCommerce store, making use of the WooCommerce API to ensure that the screens on your store fit with your overall theme and your store’s brand.

These source files comprise a theme developed for the [Tuts+ course][published url], which includes functions (in the `functions.php` file) that hook into hooks provided by the WooCommerce API. It also contains a template file in the `/woocommerce/loop` folder that overrides a template file provided by WooCommerce. See Part 5 of the course for a detailed description of how the theme is structured.

## Files

The theme includes the following template files:
* `archive.php`
* `index.php`
* `page.php` - for static pages
* `page-full-width.php`
* `archive.php` - for archive pages
* `header.php`
* `sidebar.php`
* `footer.php`
* `loop.php`
* `loop-single.php`
* `loop-page.php`
* `functions.php`


## Features

### Featured images
These are displayed in the archive and index templates if they are present, using the medium size.

### Menus
The default menu is in `header.php`, and uses the Menus admin

### Styling
The theme uses Object Oriented CSS (OOCSS). The following clases are for layout and you can use them in your pages and posts.
They are responsive, so will resize on smaller screens (for example the `.half` class is full width on phones)
* `.full-width`
* `.three-quarters`
* `.two-thirds`
* `.half`
* `.third`
* `.quarter`

### Hooks
There are 7 action hooks:
* Above the header
* Inside the header
* Before the content
* After the content
* In the sidebar
* In the footer
* After the footer

There are 3 filter hooks:
* 1 in the header
* 2 in the footer


### Widget Areas
There are six widget areas, all added via the `widgets.php` file:
- one in the header
- one in the sidebar
- four in the footer



These are source files for the Tuts+ course: [Developing a WooCommerce Theme][published url]

Available on [Tuts+](https://tutsplus.com) March, 2015

[published url]: https://code.tutsplus.com/courses/developing-a-woocommerce-theme
