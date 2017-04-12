<?php
/*-------------------------------------------------------
  Add Exist Shortcodes To Visual Composer
--------------------------------------------------------*/
if ( function_exists( 'vc_map')){
	
	require_once($vc_path."simplekey_feature.php");
	require_once($vc_path."simplekey_quote.php");
	require_once($vc_path."simplekey_pricing.php");
	require_once($vc_path."simplekey_member.php");
	require_once($vc_path."simplekey_portfolios.php");
	require_once($vc_path."simplekey_post_list.php");
	require_once($vc_path."simplekey_blog.php");
	require_once($vc_path."simplekey_blog_grid.php");
	require_once($vc_path."simplekey_comment.php");
	require_once($vc_path."simplekey_headline.php");
	require_once($vc_path."simplekey_social.php");

	vc_set_as_theme();
	 
	
	/*Load custom CSS*/
	if(!is_admin()){
		add_action('wp_enqueue_scripts', 'vc_custom_css',30);
	}
	function vc_custom_css(){
	   wp_enqueue_style("simplekey-vc-custom", get_template_directory_uri()."/vc_extends/simplekey_vc_custom.css", false, null, "all");
	}
	
	/*Override the new template folder*/
	$dir = get_template_directory() . '/vc_extends/';
	vc_set_shortcodes_templates_dir($dir);
}
	
/*------Visual Composer's CSS animation---------*/
function custom_css_animation($css_animation){
	$vc_css='';
	if($css_animation<>''){
	    $vc_css=' wpb_animate_when_almost_visible wpb_'.$css_animation;
	}else{
	  $vc_css='';
	}
	return $vc_css;
}
?>