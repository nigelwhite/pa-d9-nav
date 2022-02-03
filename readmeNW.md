drupal/core-recommended
Drupal 9
Theme https://www.drupal.org/project/bootstrap5
Subtheme web/themes/custom/b5subtheme

Repo https://github.com/nigelwhite/pa-d9-nav

This is an empty-of-data Drupal 9 site to develop and test a responsive main menu for the upcoming Drupal 9 Permaculture Association site.

Aims

- Large screens - horizontal main menu with one level of dropdowns, including search box [done]
- Small screens - fly-out off-canvas main menu with one level of dropdowns, including search box [to do]
- using native Bootstrap5 (rather than Drupal modules)

Example of desired behaviour - https://getbootstrap.com/docs/5.1/examples/offcanvas-navbar/
This is an official Bootstrap 5 example. It says "doesn't use our offcanvas component". That's fine if it works!
It includes additional js and css. Download from top of page at https://getbootstrap.com/docs/5.1/examples/

The task

- insert Bootstrap classes into the main menu twig template at web/themes/custom/b5subtheme/templates/menu--main.html.twig
- so that the fly-out off-canvas menu works on small screens

No need to tidy up the appearance of the theme. We haven't had the brief for the colours/spacing/font etc yet from our design colleague (who hasn't been appointed yet!)

To generate the site

- composer install
- please use the database in /data
