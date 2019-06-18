



<?php


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init() {

  register_sidebar(
    array(
      'name'          => __( 'Footer', 'twentynineteen' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'Add widgets here to appear in your footer.', 'twentynineteen' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );

}
add_action( 'widgets_init', 'twentynineteen_widgets_init' );



// Register Navigation Menus
function custom_navigation_menus() {

  $locations = array(
    'primary' => __( 'primary_theme_menu', 'text_domain' ),
    'Secondary' => __( 'secondary_theme', 'text_domain' ),
  );
  register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


// Add Twitter Bootstrap's standard 'active' class name to the active nav link item
add_filter('nav_menu_css_class', 'wp_bootstrap_add_active_class', 10, 2 );

// enqueue styles
if( !function_exists("wp_bootstrap_theme_styles") ) {  
    function wp_bootstrap_theme_styles() { 
        // This is the compiled css file from LESS - this means you compile the LESS file locally and put it in the appropriate directory if you want to make any changes to the master bootstrap.css.
        // wp_register_style( 'wpbsaaa', get_template_directory_uri() . '/library/dist/css/styles.f6413c85.min.css', array(), '1.0', 'all' );
        // wp_enqueue_style( 'wpbsaaa' );

        // For child themes
        wp_register_style( 'wpbs-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbs-style' );


          wp_register_style( 'wpbas', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbas' );


          wp_register_style( 'wpbs1', get_template_directory_uri() . '/css/creative.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbs1' );



          wp_register_style( 'wpbs22', 'https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbs22' );

         wp_register_style( 'wpbs212',  'https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic', array(), '1.0', 'all' );
        wp_enqueue_style( 'wpbs212' );

         wp_register_style( 'wpbqs', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css', array(), '1.0', 'all' );
         wp_enqueue_style( 'wpbqs' );



    }
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_theme_styles' );

// enqueue javascript
if( !function_exists( "wp_bootstrap_theme_js" ) ) {  
  function wp_bootstrap_theme_js(){

    if ( !is_admin() ){
      if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1) ) 
        wp_enqueue_script( 'comment-reply' );
    }

    // This is the full Bootstrap js distribution file. If you only use a few components that require the js files consider loading them individually instead
    // wp_register_script( 'bootstrap', 
    //   get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.js', 
    //   array('jquery'), 
    //   '1.2' );

    // wp_register_script( 'wpbs-js', 
    //   get_template_directory_uri() . '/library/dist/js/scripts.d1e3d952.min.js',
    //   array('bootstrap'), 
    //   '1.2' );
  
    // wp_register_script( 'modernizr', 
    //   get_template_directory_uri() . '/bower_components/modernizer/modernizr.js', 
    //   array('jquery'), 
    //   '1.2' );

     wp_register_script( 'modernizr1',get_template_directory_uri() . '/vendor/jquery/jquery.min.js', 
      array('jquery'),'1.2' );
     wp_register_script( 'modernizr2',get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', 
      array('jquery'),'1.2' );
     wp_register_script( 'modernizr3',get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', 
      array('jquery'),'1.2' );
     wp_register_script( 'modernizr4',get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', 
      array('jquery'),'1.2' );
     wp_register_script( 'modernizr5',get_template_directory_uri() . '/js/creative.min.js', 
      array('jquery'));
    

  
    /*wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'wpbs-js' );
    wp_enqueue_script( 'modernizr' );*/

    wp_enqueue_script( 'modernizr1' );
    wp_enqueue_script( 'modernizr2' );
    wp_enqueue_script( 'modernizr3' );
    wp_enqueue_script( 'modernizr4' );
    wp_enqueue_script( 'modernizr5' );
        
  }
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_theme_js' );














?>