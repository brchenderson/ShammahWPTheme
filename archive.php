<?php

$context = Timber::get_context();
$context['posts'] = Timber::get_posts(); 
$context['nav'] = Timber::get_sidebar('nav.twig', $context);
$context['blog_sidebar'] = Timber::get_widgets('blog_sidebar');
$context['footer_widgets'] = Timber::get_widgets('footer_widgets');
Timber::render('archive.twig', $context);

?>