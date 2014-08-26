<?php
/**
* DEFINE GLOBAL VARIABLES
*
*/

global $dev;
$dev = true;

global $template_directory;
$template_directory = get_bloginfo('template_directory');
$home_directory = get_bloginfo('site_url');

$site_title = get_bloginfo('name');
$site_description = get_bloginfo('description');
global $site_url;
$site_url = get_site_url();

?>
