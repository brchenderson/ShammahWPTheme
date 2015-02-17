<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shammah Health Center
 */

$context = Timber::get_context();
$context['post'] = new TimberPost(); 
$main_slides_context['slides'] = Timber::get_posts('post_type=slide');
$context['pages'] = Timber::get_posts('post_type=page');
$context['partners'] = Timber::get_posts('post_type=partners');
$context['staff'] = Timber::get_posts('post_type=staff');
$context['donate'] = Timber::get_posts('page_id=49'); 
$context['nav'] = Timber::get_sidebar('nav.twig', $context);
$context['home'] = Timber::get_posts(get_option('page_on_front'));
$context['main_carousel'] = Timber::get_sidebar('carousel.twig', $main_slides_context);


//{% include homelayout with {'page' : home} %}
/*
if(get_option('show_on_front') && get_post_type() == "slide"){
$context['home'] = Timber::get_sidebar('carousel.twig', $main_slides_context);
}
else if() {

}*/

$context['footer_widgets'] = Timber::get_widgets('footer_widgets');
Timber::render('base.twig', $context);


?>