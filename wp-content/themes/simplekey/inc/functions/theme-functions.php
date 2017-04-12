<?php
/** 
 * Theme Functions
 * @package SK Framework
 */

class description_walker extends Walker_Nav_Menu{
      function start_el(&$output, $item, $depth=0, $args = array() ,$id = 0){
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
           $class_names = $value = '';
           $classes = empty( $item->classes ) ? array() : (array) $item->classes;
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';
           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           if($item->object == 'page')
           {
                $varpost = get_post($item->object_id);
                if(is_home()){
                  $attributes .= ' href="#' . $varpost->post_name . '"';
                }else{
                  $attributes .= ' href="'.home_url().'/#' . $varpost->post_name . '"';
                }
           }
           else
                $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args,$id );
     }
}

/* Check navigation menu setting*/
if( !function_exists( 'sk_check_menu') ){
    function sk_check_menu(){
		global $SK;
		//If custom menu exist,get the ID of pages
		$locations = get_nav_menu_locations();
		if(isset($locations['primary_navi'])){
		    $primary_nav = $locations['primary_navi'];
	    }
		if (isset($primary_nav) && $primary_nav<>'') {
	        $menu = wp_get_nav_menu_object($primary_nav);
	        $menu_items = wp_get_nav_menu_items($menu->term_id);
	        $pageID = array();
	        foreach($menu_items as $item) {
	            if($item->object == 'page')
	                $pageID[] = $item->object_id;
	        }
			query_posts( array( 'post_type' => 'page','post__in' => $pageID, 'posts_per_page' => count($pageID), 'orderby' => 'post__in' ) );
		}else {	
		   
		    //If default page menu setting doesn't exist
			query_posts(array( 'post_type' => 'page','posts_per_page'=>1,'orderby' => 'menu_order', 'order' => 'ASC') );
		}
	}
}

/*CSS animation*/
function sk_css_animate($css_animate){
    $no_animate='';
	if ( function_exists( 'vc_map')){
	   return $css_animate;
	}else{
	   return $no_animate;
	}
}

/**
 * Gallery Metabox - Only show on 'page' and 'rotator' post types
 * @author Bill Erickson
 * @link http://www.wordpress.org/extend/plugins/gallery-metabox
 * @link http://www.billerickson.net/code/gallery-metabox-custom-post-types
 * @since 1.0
 *
 * @param array $post_types
 * @return array
 */
function sk_gallery_metabox_page_and_rotator( $post_types ) {
  return array( 'portfolio' );
}
add_action( 'be_gallery_metabox_post_types', 'sk_gallery_metabox_page_and_rotator' );

/*Removing Demo Mode and Notices for Redux Framwork*/
function removeDemoModeLink() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'removeDemoModeLink');

/*Social network icons*/
function sk_social(){
  global $SK;
  $social='<div class="social-icons-new">'.PHP_EOL;
  if(isset($SK['googlplus']) && $SK['googlplus']<>'')
  $social.='<a href="'.$SK['googlplus'].'" title="Google+" class="gplus" target="_blank"><i class="fa fa-google-plus"></i></a> '.PHP_EOL;
  if(isset($SK['facebook']) && $SK['facebook']<>'')
  $social.='<a href="'.$SK['facebook'].'" title="Facebook" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a> '.PHP_EOL;
  if(isset($SK['twitter']) && $SK['twitter']<>'')
  $social.=' <a href="'.$SK['twitter'].'" title="Twitter" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a> '.PHP_EOL;
  if(isset($SK['deviantart']) && $SK['deviantart']<>'')
  $social.='<a href="'.$SK['deviantart'].'" title="Deviantart" class="deviantart" target="_blank"><i class="fa fa-deviantart"></i></a>'.PHP_EOL;
  if(isset($SK['tumblr']) && $SK['tumblr']<>'')
  $social.='<a href="'.$SK['tumblr'].'" title="tumblr" class="tumblr" target="_blank"><i class="fa fa-tumblr"></i></a>  '.PHP_EOL;
  if(isset($SK['flickr']) && $SK['flickr']<>'')
  $social.='<a href="'.$SK['flickr'].'" title="Flickr" class="flickr" target="_blank"><i class="fa fa-flickr"></i></a> '.PHP_EOL;
  if(isset($SK['behance']) && $SK['behance']<>'')
  $social.='<a href="'.$SK['behance'].'" title="Behance" class="behance" target="_blank"><i class="fa fa-behance"></i></a> '.PHP_EOL;
  if(isset($SK['dribbble']) && $SK['dribbble']<>'')
  $social.='<a href="'.$SK['dribbble'].'" title="Dribbble" class="dribbble" target="_blank"><i class="fa fa-dribbble"></i></a> '.PHP_EOL;
  if(isset($SK['pinterest']) && $SK['pinterest']<>'')
  $social.='<a href="'.$SK['pinterest'].'" title="Pinterest" class="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>'.PHP_EOL;
  if(isset($SK['youtube']) && $SK['youtube']<>'')
  $social.='<a href="'.$SK['youtube'].'" title="Youtube" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a>'.PHP_EOL;
  if(isset($SK['vimeo']) && $SK['vimeo']<>'')
  $social.='<a href="'.$SK['vimeo'].'" title="Vimeo" class="vimeo" target="_blank"><i class="fa fa-vimeo-square"></i></a>'.PHP_EOL;
  if(isset($SK['linkedIn']) && $SK['linkedIn']<>'')
  $social.='<a href="'.$SK['linkedIn'].'" title="linkedIn" class="linkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>'.PHP_EOL;
  if(isset($SK['soundCloud']) && $SK['soundCloud']<>'')
  $social.='<a href="'.$SK['soundCloud'].'" title="SoundCloud" class="soundcloud" target="_blank"><i class="fa fa-soundcloud"></i></a>'.PHP_EOL;
  if(isset($SK['hearthis']) && $SK['hearthis']<>'')
  $social.='<a href="'.$SK['hearthis'].'" title="hearthis" class="hearthis" target="_blank"><i class="tf tf-hearthis"></i></a> '.PHP_EOL;
  if(isset($SK['blogger']) && $SK['blogger']<>'')
  $social.='<a href="'.$SK['blogger'].'" title="blogger" class="blogger" target="_blank"><i class="tf tf-blogger"></i></a> '.PHP_EOL;
  if(isset($SK['github']) && $SK['github']<>'')
  $social.='<a href="'.$SK['github'].'" title="GitHub" class="github" target="_blank"><i class="fa fa-github"></i></a>'.PHP_EOL;
  if(isset($SK['myspace']) && $SK['myspace']<>'')
  $social.='<a href="'.$SK['myspace'].'" title="MySpace" class="old myspace" target="_blank"><i class="fa fa-myspace"></i></a>'.PHP_EOL;
  if(isset($SK['myemail']) && $SK['myemail']<>'')
  $social.='<a href="mailto:'.$SK['myemail'].'" title="Email" class="myemail" target="_blank"><i class="fa fa-envelope"></i></a>'.PHP_EOL;
  if(isset($SK['yahooim']) && $SK['yahooim']<>'')
  $social.='<a href="ymsgr:sendIM?'.$SK['yahooim'].'" title="Yahoo IM" class="yahooim" target="_blank"><i class="fa fa-yahoo"></i></a>'.PHP_EOL;
  if(isset($SK['aim']) && $SK['aim']<>'')
  $social.='<a href="aim:GoIm?screenname=?'.$SK['aim'].'" title="AIM" class="old aim" target="_blank">AIM</a>'.PHP_EOL;
  if(isset($SK['instagram']) && $SK['instagram']<>'')
  $social.='<a href="'.$SK['instagram'].'" title="instagram" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a> '.PHP_EOL;
  if(isset($SK['meetup']) && $SK['meetup']<>'')
  $social.='<a href="'.$SK['meetup'].'" title="meetup" class="old meetup" target="_blank"><i class="fa fa-meetup"></i></a> '.PHP_EOL;
  if(isset($SK['fivehundreds']) && $SK['fivehundreds']<>'')
  $social.='<a href="'.$SK['fivehundreds'].'" title="meetup" class="icon_500px" target="_blank"><i class="fa fa-500px"></i></a> '.PHP_EOL;
  if(isset($SK['xing']) && $SK['xing']<>'')
  $social.='<a href="'.$SK['xing'].'" title="Xing" class="xing" target="_blank"><i class="fa fa-xing"></i></a> '.PHP_EOL;
  if(isset($SK['klout']) && $SK['klout']<>'')
  $social.='<a href="'.$SK['klout'].'" title="klout" class="old klout" target="_blank"><i class="fa fa-klout"></i></a> '.PHP_EOL;
  if(isset($SK['houzz']) && $SK['houzz']<>'')
  $social.='<a href="'.$SK['houzz'].'" title="houzz" class="old houzz" target="_blank"><i class="fa fa-houzz"></i></a> '.PHP_EOL;
  if(isset($SK['vk']) && $SK['vk']<>'')
  $social.='<a href="'.$SK['vk'].'" title="vk" class="vk" target="_blank"><i class="fa fa-vk"></i></a> '.PHP_EOL;
  if(isset($SK['yelp']) && $SK['yelp']<>'')
  $social.='<a href="'.$SK['yelp'].'" title="yelp" class="yelp" target="_blank"><i class="fa fa-yelp"></i></a> '.PHP_EOL;
  if(isset($SK['tripadvisor']) && $SK['tripadvisor']<>'')
  $social.='<a href="'.$SK['tripadvisor'].'" title="trip advisor" class="tripadvisor" target="_blank"><i class="fa fa-tripadvisor"></i></a> '.PHP_EOL;
  if(isset($SK['rss']) && $SK['rss']<>'')
  $social.='<a href="'.$SK['rss'].'" title="Feed" class="feed" target="_blank"><i class="fa fa-rss"></i></a> '.PHP_EOL;
  $social.='</div>'.PHP_EOL;
  $social = apply_filters('sk_social', $social);
  return $social;
} 
?>