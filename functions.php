<?php
 
register_sidebar(array(
'name' => 'footer',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));

register_sidebar(array(
'name' => 'Footer',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

}
