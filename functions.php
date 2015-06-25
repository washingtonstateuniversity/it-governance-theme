<?php	

 
register_sidebar(array(
'id'	=>	'sidebar-1',
'name' => 'footer',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'id'	=>	'sidebar-2',
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));

register_sidebar(array(
'id'	=>	'sidebar-3',
'name' => 'Footer',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

}
