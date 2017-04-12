<?php
/** 
 * Theme Initialize
 * @package SK Framework
 * You can initialize this theme functions like menu,sidebar,thumbnail size,post format and so on.
 * And you can also include more advanced extendsions like custom post type or widgets here. 
 */


$sk_theme 	= wp_get_theme( 'simplekey' );
$SK = get_option('van');

add_action( 'sk_init', 'sk_load_framework');
function sk_load_framework(){
	/*-------------------------------------------------------
	* The path to SK Framework and theme specific functions
	-------------------------------------------------------*/
	$functions_path = 	get_template_directory() . '/inc/functions/';
	$admin_path 	= 	get_template_directory() . '/inc/admin/';
	$vc_path 		=	get_template_directory() . '/vc_extends/';
	$extensions_path = get_template_directory() . '/inc/extensions/';
	$demo_path = get_template_directory() . '/inc/demo/';
	
	/*The common functions and theme functions*/
	require_once($functions_path."lib.php");        			//  Functions Liburary
	require_once($functions_path."theme-functions.php");        // Theme functions
	require_once($functions_path."template-tags.php");          // Template-tags
	require_once($functions_path."deprecated.php");             // Deprecated functions
	
	/*Admin functions and SK Panel*/
	require_once($functions_path."admin-functions.php");   								
	require_once($functions_path."shortcodes/shortcodes.php");   					    
	require_once($functions_path."shortcodes/generator/shortcode-generator.php");       
	require_once($vc_path."vc_extends.php"); 
	
	/**
	 * Plugins
	 */
	require_once(get_template_directory() . '/inc/plugins/plugins.php');
	require_once($admin_path."options-init.php"); 				 // Theme options           

	/*Add custom field at post,page or category edit page*/
	require_once($extensions_path.'metabox.php');
	require_once($extensions_path."theme-category-field.php");
	require_once($extensions_path."portfolio-type.php");

	/*Demo Importer*/
	require_once($demo_path."demo-importer.php");  
}
do_action('sk_init');

add_action( 'after_setup_theme', 'sk_support' );
function sk_support(){
	 
	/*Add some useful support*/
	add_editor_style('editor-style.css');
	add_theme_support( 'automatic-feed-links' );
	
    /*Add Title*/
	add_theme_support( 'title-tag' );
	
	/*Declare WooCommerce support*/
	add_theme_support('woocommerce');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/*
 	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on focux, use a find and replace
	 * to change 'focux' to the name of your theme in all the template files.
	 */
	
	load_theme_textdomain( 'SimpleKey', get_template_directory().'/languages' ); 
	$locale = get_locale(); 
	$locale_file = get_template_directory_uri()."/languages/$locale.php"; 
	if ( is_readable($locale_file) ) require_once($locale_file);
	
	
	if ( ! isset( $content_width ) ) $content_width = 980;
	remove_filter('the_content', 'wptexturize');
	add_filter('widget_text', 'do_shortcode');
	
	/*Add diffierent size for post thumbnails*/
	add_theme_support('post-thumbnails');
	if ( function_exists( 'add_image_size')){  
	    add_image_size('blog_thumbnail', 260, 218,true);
		add_image_size('slider_thumbnail', 400, 510,true);
		add_image_size('image_single_slider', 980, 730,true);
		add_image_size('portfolio_thumbnail', 640, 640,true);
	}

	/*Init nav menus*/
	register_nav_menus(array(
	  'primary_navi' => esc_html__('Primary Menu','SimpleKey'),
	  'footer_navi' => esc_html__('Footer Menu','SimpleKey'),
	));

	/*Change excerpt more string*/
	function sk_excerpt_more( $more ) {
		return '...';
	}
	add_filter( 'excerpt_more', 'sk_excerpt_more' );
	
	/*Init widget*/
	add_action( 'widgets_init', 'sk_widgets_init' );
	function sk_widgets_init() {
		register_sidebar(array(
			'name' => esc_html__( 'Blog sidebar', 'SimpleKey' ),
			'id' => 'blog-sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		));
	}
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action( 'after_setup_theme', 'sk_content_width', 0 );
function sk_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sk_content_width', 960 );
}

/*Load secondary scripts*/
add_action('wp_enqueue_scripts', 'sk_scripts');
function sk_scripts(){
    global $SK;

    /* ================================
    * Enqueue CSS files
    * ===============================*/
   wp_enqueue_style("style", get_stylesheet_uri(), false, null, "all");
   wp_enqueue_style("simplekey-general", get_template_directory_uri()."/assets/css/general.css", false, null, "all");
   wp_enqueue_style("simplekey-layout", get_template_directory_uri()."/assets/css/layout.css", false, null, "all");
   wp_enqueue_style("simplekey-fonts", get_template_directory_uri()."/assets/css/fonts.css", false, null, "all");
   wp_enqueue_style("font-awesome", get_template_directory_uri()."/assets/fonts/font-awesome/assets/css/font-awesome.min.css", false, null, "all");
   wp_enqueue_style("themevan-font", get_template_directory_uri()."/assets/fonts/themevan_font/themevan_font.css", false, null, "all");
   wp_enqueue_style("flexslider", get_template_directory_uri()."/assets/css/flexslider/flexslider.css", false, "", "all");
   wp_enqueue_style("colorbox", get_template_directory_uri()."/assets/css/colorbox/colorbox.css", false, "", "all");
   wp_enqueue_style("simplekey-shortcodes", get_template_directory_uri()."/inc/functions/shortcodes/shortcodes.css", false, "2.0", "all");
   
   if ( class_exists( 'woocommerce' ) ){
    wp_dequeue_style( 'woocommerce_frontendstyles' );
	wp_enqueue_style( "woocommerce-simplekey", get_template_directory_uri()."/woocommerce/woocommerce-simplekey.css",false, null, "all");
    wp_enqueue_style( 'woocommerce_responsive_frontend', get_stylesheet_directory_uri()."/woocommerce/woocommerce-responsive.css" );
   }
    
   /* ================================
    * Enqueue JS files
    * ===============================*/
    wp_enqueue_script( 'waypoints' );
    wp_enqueue_script( 'hoverIntent');
    wp_enqueue_script( 'simplekey-modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.41385.js', array('jquery'), null, false );
    wp_enqueue_script( 'jpreloader', get_template_directory_uri() . '/assets/js/jpreloader.min.js', array('jquery'), null, false );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'simplekey-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), null, true );
	wp_enqueue_script( 'simplekey', get_template_directory_uri() . '/assets/js/jquery.simplekey.js', array('jquery'), null, true );
	
	
	/* ================================
     * Output the javascript arguments
     * ===============================*/
     
	if(is_home() || is_front_page()){ 
	   if($SK['isLoad']==1 || !isset($SK['isLoad'])){
	     $isLoad=1;
	   }else{
	     $isLoad=0;
	   }
	}else{
	     $isLoad=0;
	}
		
	if(!isset($SK['isResponsive']) || $SK['isResponsive']==1){
	  $isResponsive='1';
	}else{
	  $isResponsive='0';	 
    }
	if(!isset($SK['isParallax']) || $SK['isParallax']==1){
	  $isParallax='1';
	}else{
	  $isParallax='0';
	}
	
	$args='<script type="text/javascript">
	  var isLoad='.$isLoad.';
	  var isResponsive='.$isResponsive.';
	  var isParallax='.$isParallax.PHP_EOL;
	
	if(!isset($SK['isNiceScroll']) || $SK['isNiceScroll']=='1'){
	  $nicescroll=1;
	}else{
	  $nicescroll=0;
	}
	
	$args.='var pixel="'.get_template_directory_uri().'/inc/assets/images/pixel.gif";
	  var loadimg="'.get_template_directory_uri().'/inc/assets/images/loader2.gif";
	  var isNiceScroll='.$nicescroll.';
      var mobileMenuText="'.__('Navigate to ...','SimpleKey').'";
</script>'.PHP_EOL;
		
	echo $args;
	
}

/**
 * Load Google Fonts
 * Hook: focux_scripts
 */
add_action( 'wp_enqueue_scripts', 'sk_font_styles',20);
function sk_font_styles() {
    wp_enqueue_style( 'simplekey-default-fonts', sk_fonts_url(), array(), null );
}
function sk_fonts_url() {
    $fonts_url = '';
    $Lato = _x( 'on', 'Lato: on or off', 'simplekey' );
    
    if ('off' !== $Lato) {
	    $font_families = array();
	 
	    
	    if ( 'off' !== $Lato ) {
	        $font_families[] = 'Lato:100,300,400,700 900';
	    }
	    
	    $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext,vietnamese,cyrillic-ext,cyrillic,greek,greek-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
    
    return esc_url_raw( $fonts_url );
}

/*Integration Head in dashbroad*/
add_action('admin_init', 'sk_admin_init',99);
function sk_admin_init(){
	wp_enqueue_style( 'farbtastic' );
	wp_enqueue_script( 'farbtastic' );
	wp_enqueue_style("simplekey-admin", get_template_directory_uri()."/inc/assets/css/admin.css", false, "1.0", "all");
	wp_enqueue_style("simplekey-backend-fonts", get_template_directory_uri()."/assets/css/fonts.css", false, null, "all");
	wp_enqueue_script("simplekey-admin-script", get_template_directory_uri()."/inc/assets/js/admin_script.js");
}
?>