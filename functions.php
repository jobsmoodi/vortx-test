<?php 
 
/**
 * Register navigation menus uses wp_nav_menu in five places.
 */  
include( 'customfunction.php' );
  
function vortex_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'social'   => __( 'Social Menu', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'vortex_menus' );


function vortx_script_enqueue() {
      wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	    wp_enqueue_style('datetimepicker-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css');
	    wp_enqueue_style('boot', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
      wp_enqueue_script('slimmin-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
      wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
      wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
      wp_enqueue_style('moment-js', get_template_directory_uri() .'/js/bootstrap-datetimepicker.min.css');
      wp_enqueue_script('moment-js', get_template_directory_uri() .'/js/moment.min.js');
      wp_enqueue_script('datetimepicker-js', get_template_directory_uri() .'/js/bootstrap-datetimepicker.min.js');
      wp_enqueue_script('charts-js', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js');
      
      wp_localize_script('customjs_b', 'ajax_custom', array(
            'ajaxurl' => admin_url('admin-ajax.php')
        ));
  }

add_action('wp_enqueue_scripts','vortx_script_enqueue');


function vortx_generate_title() {
	
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'vortx_generate_title');




function wpdocs_register_my_setting() {
    register_setting( 'my-options-group', 'my-option-name', 'intval' ); 
} 
add_action( 'admin_init', 'wpdocs_register_my_setting' );


add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Main Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

require_once(get_stylesheet_directory() . '/action-filter.php');


//========== a tag class ============= //
add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}

//=================== widget ======================


function vortex_sidebar_registration() {

  // Arguments used in all register_sidebar() calls.

  $shared_args = array(

    'before_title'  => '<h3 class="text-uppercase foot__title">',

    'after_title'   => '</h3>',

    'before_widget' => '<div class="widgontent">',

    'after_widget'  => '</div>',

  );

  // Footer #1.

  register_sidebar(

    array_merge(

      $shared_args,

      array(

        'name'        => __( 'Footer #1', 'twentytwenty' ),
        'id'          => 'sidebar-1',
        'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
      )

    )

  );


  // Footer #2.

  register_sidebar(

    array_merge(

      $shared_args,

      array(

        'name'        => __( 'Footer #2', 'twentytwenty' ),
        'id'          => 'sidebar-2',
        'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),

      )

    )

  );

  // Footer #3.

  register_sidebar(

    array_merge(

      $shared_args,

      array(

        'name'        => __( 'Footer #3', 'twentytwenty' ),
        'id'          => 'sidebar-3',
        'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),

      )

    )

  );

  // Footer #4.

  register_sidebar(

    array_merge(

      $shared_args,

      array(

        'name'        => __( 'Footer #4', 'twentytwenty' ),
        'id'          => 'sidebar-4',
        'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),

      )

    )

  );


  // Footer #5.

  register_sidebar(

    array_merge(

      $shared_args,

      array(

        'name'        => __( 'Copyright', 'twentytwenty' ),
        'id'          => 'sidebar-5',
        'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),

      )

    )

  );

}


add_action( 'widgets_init', 'vortex_sidebar_registration' );
add_post_type_support( 'page', 'excerpt' );


