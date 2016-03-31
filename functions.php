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

/* Major Project Submissions */

function get_gf_submissions_major() {
    
    $form_id                                = '1';
    $search_criteria['field_filters'][]     = array('key'=> '17','operator' => 'is', 'value' => 'Yes');
    $count                                  = 0;
    $sub_count                              = GFAPI::count_entries($form_id);
    $entries                                = GFAPI::get_entries( $form_id, $search_criteria ); 
        
        while ($count <= $sub_count) {
            echo "<div><ul><li>". $entries[$count]['2'] . "</li>";
            echo "<li>". $entries[$count]['3'] . "</li>";
            echo "<li>". $entries[$count]['5'] . "</li>";
            echo "<li>". $entries[$count]['7'] . "</li>";
            echo "<li>". $entries[$count]['8'] . "</li></ul></div>";

            $count++;

        }
     
       
}
add_shortcode('majorsubmissions', 'get_gf_submissions_major');

/* Minor Project Submissions*/

function get_gf_submissions_minor() {
    
    $form_id                                = '1';
    $search_criteria['field_filters'][]     = array('key'=> '17','operator' => 'is', 'value' => 'No');
    $count                                  = 0;
    $sub_count                              = GFAPI::count_entries($form_id);
    $entries                                = GFAPI::get_entries( $form_id, $search_criteria ); 
        
        while ($count <= $sub_count) {
            echo "<div><ul><li>". $entries[$count]['2'] . "</li>";
            echo "<li>". $entries[$count]['3'] . "</li>";
            echo "<li>". $entries[$count]['5'] . "</li>";
            echo "<li>". $entries[$count]['7'] . "</li>";
            echo "<li>". $entries[$count]['8'] . "</li></ul></div>";

            $count++;

        }
    
}
add_shortcode('minorsubmissions', 'get_gf_submissions_minor');

?>

