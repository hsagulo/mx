<?php
/**
 * functions.php
 *
 */

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */
add_action( 'genesis_setup', 'bsg_load_lib_files', 15 );

function bsg_load_lib_files() {
    foreach ( glob( dirname( __FILE__ ) . '/lib/*.php' ) as $file ) { include $file; }
}


//* Add "first" and "last" CSS classes to dynamic sidebar widgets. Also adds numeric index class for each widget (widget-1, widget-2, etc.)
add_filter('dynamic_sidebar_params','widget_first_last_classes');
function widget_first_last_classes($params) {

	global $my_widget_num; // Global a counter array
	$this_id = $params[0]['id']; // Get the id for the current sidebar we're processing
	$arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets	

	if(!$my_widget_num) {// If the counter array doesn't exist, create it
		$my_widget_num = array();
	}

	if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets
		return $params; // No widgets in this sidebar... bail early.
	}

	if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar
		$my_widget_num[$this_id] ++;
	} else { // If not, create it starting with 1
		$my_widget_num[$this_id] = 1;
	}

	$class = 'class="widget-' . $my_widget_num[$this_id] . ' '; // Add a widget number class for additional styling options

	if($my_widget_num[$this_id] == 1) { // If this is the first widget
		$class .= 'first ';
	} elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) { // If this is the last widget
		$class .= 'last ';
	}

	$params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']); // Insert our new classes into "before widget"

	return $params;

}

add_theme_support( 'genesis-connect-woocommerce' ); //Connect WooCommerce on Genesis Theme




// Enqueue Web Fonts
add_action( 'wp_enqueue_scripts', 'custom_google_fonts' );
function custom_google_fonts() {
	wp_enqueue_style( 'google-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,700,600,400italic,700italic,800,300', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'webfonts', '//fonts.googleapis.com/css?family=Oswald' );
}

// Enqueue CSSs
add_action( 'wp_enqueue_scripts', 'enqueue_framework_styles' );
function enqueue_framework_styles() {

  wp_enqueue_style( 'slickjs-slider', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css', array(), '1.5.7' );
  wp_enqueue_style( 'animatecss', get_stylesheet_directory_uri() . '/css/animate.min.css', array(), '3.5.0' );

}

// Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );
function custom_enqueue_scripts() {

  
  wp_enqueue_script( 'viewport-checker', get_stylesheet_directory_uri() . '/js/viewportChecker.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'viewport-checker' );

  wp_register_script( 'js-slick', '//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js', array('jquery'), '1.5.7' );
  wp_enqueue_script( 'js-slick' );

}

// Add To Top button Top Button
add_action( 'genesis_before', 'genesis_to_top');
function genesis_to_top() {
	echo '<a href="#0" class="to-top" title="Back To Top">Top</a>';
}

 
add_action ( 'genesis_before_header', 'mx_before_header' );
function mx_before_header() {
	echo '<div class="header-section"><div class="container">';
}

// add_action ( 'genesis_header', 'mx_header' );
// function mx_header() {

// }


add_action( 'genesis_after_header', 'genesis_do_new_header' ); 
function genesis_do_new_header() { 
		genesis_do_nav();
	echo '</div> <a href="#section-about" class="arrow-down"><i class="fa fa-2x fa-chevron-down"></i></a> </div>';
}  



	remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
	remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );
	remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
	remove_action( 'genesis_entry_header', 'genesis_do_post_title' );



