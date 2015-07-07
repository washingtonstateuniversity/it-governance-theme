<?php	


function footer_nav_widgets() {

	register_sidebar(array(
'id'	=>	'sidebar-1',
'name' => 'footer-left',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

register_sidebar(array(
'id'	=>	'sidebar-2',
'name'	=>	'footer-center',
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));

register_sidebar(array(
'id'	=>	'sidebar-3',
'name' => 'footer-right',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

}
add_action( 'widgets_init', 'footer_nav_widgets' );
?>

