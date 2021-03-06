=== Force Fields ===
Contributors: thomasjbradley
Tags: custom fields, extra content, cms, admin, metadata, more fields, template
Requires at least: 3.1.4
Tested up to: 3.2.1
Stable tag: 1.0.0

Extends the More Fields plugin, allowing developers to hide or show input boxes per template.

== Description ==

Force Fields extends the wonderful [More Fields](http://wordpress.org/extend/plugins/more-fields/) plugin by allowing developers to hide or show input boxes created by More Fields on a per template basis.

**Requires [More Fields](http://wordpress.org/extend/plugins/more-fields/) 2.0.5 or higher.**

You can choose to only show specific boxes or omit specific boxes, on a per template basis. Default box sets can be set up in your theme's `page.php` file.

= How to use =

After installing [More Fields](http://wordpress.org/extend/plugins/more-fields/), create as many boxes as you would like, assigning their *Used with post types* option to *Page*.

**Showing specific boxes**

Open one of your template files and edit the header comment, adding the *Fields* directive.

`/*
Template Name: Example
Fields: 'Example More Fields Box' 'Example Box 2'
*/`


Notice the *Fields* line, it specifies which boxes should be visible for this template—all other boxes will be hidden. **The name specified for the box in the *Fields* directive comes from the *Title of the box* option for the [More Fields](http://wordpress.org/extend/plugins/more-fields/) box.** You could alternatively use the ID generated by [More Fields](http://wordpress.org/extend/plugins/more-fields/). Single or double quote marks are OK.

The above *Fields* directive could also be written as:

`/*
Template Name: Example
Fields: only 'Example More Fields Box' 'Example Box 2'
*/`


Notice the extra word `only`; it's optional, but you can add it in if you want to be extra specific.

**Hiding specific boxes**

Where the `only` option will show the specified boxes, hiding all others, the `omit` option works in reverse: showing all the boxes except the specified ones.

`/*
Template Name: Example
Fields: omit 'Example Box 2'
*/`


The above *Fields* directive will show all boxes on the page edit screen except `Example Box 2`.

Many boxes can, of course, be omitted:

`/*
Template Name: Example
Fields: omit 'Example Box 2' 'Example Box 3'
*/`


**Hiding all boxes**

All the boxes can be hidden for a template using the `omit-all` option.

`/*
Template Name: Example
Fields: omit-all
*/`


**Defaults and page.php**

By putting the *Fields* directive in the `page.php` file, you can set default boxes for pages that use the default template, or don't specify their own *Fields* directive.

Just add something like this to the top of your `page.php`:

`/*
Fields: 'Example Box 3'
*/`


== Installation ==

= How to install Force Fields: =

1. Install [More Fields](http://wordpress.org/extend/plugins/more-fields/), version 2.0.5 or higher
2. Upload the `force-fields` folder to the `/wp-content/plugins/` directory
3. Activate Force Fields through the *Plugins* menu in WordPress

== Changelog ==

= 1.0.0 =
* Initial release
