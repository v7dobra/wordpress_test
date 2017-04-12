<?php
/** 
 * Admin Functions
 * @package SK Framework 
 */
 
/* TABLE OF CONTENTS
 * - sk_head()
 * - sk_footer()
 * - sk_favicon()
 * - sk_seo_setting()
 * - sk_add_styles()
 * - sk_additional_code()
 * - sk_statistics_code()
 * - sk_customize_meta_boxes()
 * - sk_page_excerpt_metabox()
 * - sk_custom_profile( $contactmethods )
 * - sk_dashboard_widget() 
 * - sk_posts_list($cate_id,$number,$echo)
 * - sk_breadcrumbs()
 * - sk_ad()
 * - sk_category_tags($cate_slug,$number,$format)
 */

/*Integration Head*/
add_action('wp_head', 'sk_head');
function sk_head(){
    sk_favicon();
	sk_custom_css();
	sk_additional_code();
	if ( is_singular() && get_option('thread_comments'))wp_enqueue_script( 'comment-reply' );
}

/*Integration Footer*/
add_action('wp_footer', 'sk_footer');
function sk_footer(){
   sk_footer_code();
}

/*Add a lovely favicon*/
function sk_favicon() {
   global $SK;
   if(isset($SK['favicon']['url']) && $SK['favicon']['url'] <> ''){
     echo '<link rel="shortcut icon" href="'.esc_url($SK['favicon']['url']).'" type="image/x-icon">'.PHP_EOL; 
   } 
}

/*Add Cunstom CSS*/
function sk_custom_css() {
   global $SK;
   $custom_css='';
   if(isset($SK['enable_custom']) && $SK['enable_custom']==1){
	   //Add Fonts
	   $section_heading_font = explode(':', $SK['section_heading_font']);
	   $section_subtitle_font = explode(':', $SK['section_subtitle_font']);
	   $navi_link_font = explode(':', $SK['navi_link_font']);
	   
	   
	   if($SK['section_heading_font']<>'' && $SK['section_heading_font']!=="nexa_boldregular" && $SK['section_heading_font']!=="league_gothic" && $SK['section_heading_font']!=="nexa_lightregular" && $SK['section_heading_font']!=="infinity" && $SK['section_heading_font']!=="Oswald")
	   $custom_css.='<link href="http://fonts.googleapis.com/css?family='.str_replace(' ', '+', $section_heading_font[0]).'&subset=latin,latin-ext" rel="stylesheet" type="text/css">'.PHP_EOL;
	   
	   if($SK['section_subtitle_font']<>'' && $SK['section_subtitle_font']!=="nexa_lightregular" && $SK['section_subtitle_font']!=="nexa_boldregular" && $SK['section_subtitle_font']!=="league_gothic" && $SK['section_subtitle_font']!=="infinity" && $SK['section_subtitle_font']!=="Oswald")
	   $custom_css.='<link href="http://fonts.googleapis.com/css?family='.str_replace(' ', '+', $section_subtitle_font[0]).'&subset=latin,latin-ext" rel="stylesheet" type="text/css">'.PHP_EOL;
	   
	   if($SK['navi_link_font']<>'' && $SK['navi_link_font']!=="nexa_boldregular" && $SK['navi_link_font']!=="league_gothic" && $SK['navi_link_font']!=="nexa_lightregular" && $SK['navi_link_font']!=="infinity" && $SK['navi_link_font']!=="Oswald")
	   $custom_css.='<link href="http://fonts.googleapis.com/css?family='.str_replace(' ', '+', $navi_link_font[0]).'&subset=latin,latin-ext" rel="stylesheet" type="text/css">'.PHP_EOL;
	}
	
	$custom_css.='<style type="text/css">'.PHP_EOL;
	if(isset($SK['isLoad'])&&$SK['isLoad']==0)$custom_css.='body.home{display:block;}'.PHP_EOL; 
	if(isset($SK['logo']['url']) && $SK['logo']['url'] <> ''){
		 $custom_css.='#site-logo a{background:url('.esc_url($SK['logo']['url']).') no-repeat center;}'.PHP_EOL; 
	}
	if(isset($SK['high_logo']['url']) && $SK['high_logo']['url'] <> ''){
		 $custom_css.='@media only screen and (-Webkit-min-device-pixel-ratio: 1.5),
						only screen and (-moz-min-device-pixel-ratio: 1.5),
						only screen and (-o-min-device-pixel-ratio: 3/2),
						only screen and (min-device-pixel-ratio: 1.5) {
						  #site-logo a {
							background-image: url('.esc_url($SK['high_logo']['url']).');
							background-size: auto 69px;
						  }
						}'.PHP_EOL; 
	}
	if(isset($SK['enable_custom']) && $SK['enable_custom']==1){ 
	   //Custom CSS
	   if(isset($SK['global_link']) && $SK['global_link'] <> ''){
		 $custom_css.='a{color:'.$SK['global_link'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['global_link_hover']) && $SK['global_link_hover'] <> ''){
		 $custom_css.='a:hover{color:'.$SK['global_link_hover'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['selection_color']) && $SK['selection_color'] <> ''){
		 $custom_css.='::selection{background:'.$SK['selection_color'].';}'.PHP_EOL; 
	   }
	   
	   if(isset($SK['sticky_top_bg']) && $SK['sticky_top_bg'] <> ''){
		 $custom_css.='#extra-top{background:'.$SK['navi_bg'].';}'.PHP_EOL; 
	   }
	   
	   if(isset($SK['navi_bg']) && $SK['navi_bg'] <> ''){
		   $custom_css.='#primary-menu,#primary-menu-container li ul.sub-menu{background:'.$SK['navi_bg'].';}'.PHP_EOL; 
	   }
	   
	   if(isset($SK['navi_link_font']) && $SK['navi_link_font'] <> ''){
		 $custom_css.='#primary-menu-container a{font-family:"'.str_replace('+', ' ', $navi_link_font[0]).'",Arial;}'.PHP_EOL; 
	   }
	   if(isset($SK['navi_link_size']) && $SK['navi_link_size'] <> ''){
		 $custom_css.='#primary-menu-container a{font-size:'.$SK['navi_link_size'].'px;}'.PHP_EOL; 
	   }
	   if(isset($SK['navi_link']) && $SK['navi_link'] <> ''){
		 $custom_css.='#primary-menu-container a,#primary-menu-container li ul.sub-menu li a{color:'.$SK['navi_link'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['navi_link_hover']) && $SK['navi_link_hover'] <> ''){
		  $custom_css.='#primary-menu-container a:hover,#primary-menu-container li.current-menu-item a:hover,#primary-menu-container li ul.sub-menu li a:hover{color:'.$SK['navi_link_hover'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['navi_link_bghover']) && $SK['navi_link_bghover'] <> ''){
		 $custom_css.='.sf-menu li:hover, .sf-menu li.sfHover,
.sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active {background:'.$SK['navi_link_bghover'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['navi_link_active']) && $SK['navi_link_active'] <> ''){
		 $custom_css.='#primary-menu-container ul li.current-menu-item a{color:'.$SK['navi_link_active'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['footer_bg_color']) && $SK['footer_bg_color'] <> '' || isset($SK['footer_text_color']) && $SK['footer_text_color'] <> ''){
		 $custom_css.='#footer{background:'.$SK['footer_bg_color'].';color:'.$SK['footer_text_color'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['footer_link']) && $SK['footer_link'] <> ''){
		 $custom_css.='#footer a{color:'.$SK['footer_link'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['footer_link_hover']) && $SK['footer_link_hover'] <> ''){
		 $custom_css.='#footer a:hover{color:'.$SK['footer_link_hover'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['section_heading_font']) && $SK['section_heading_font'] <> ''){
		$custom_css.='.page-area .title h1,.page-area .title h1 strong,.page-area .title h2,.page-area .title h2 strong,.entry h1,.entry h2,.entry h3,.entry h4,.entry h5,.entry h6,.post h2{font-family:"'.str_replace('+', ' ', $section_heading_font[0]).'",Arial;}'.PHP_EOL;
	   }
	   if(isset($SK['section_subtitle_font']) && $SK['section_subtitle_font'] <> ''){
		$custom_css.='.page-area .title p{font-family:"'.str_replace('+', ' ', $section_subtitle_font[0]).'",Arial;}'.PHP_EOL;
	   }
	   if(isset($SK['section_heading_size']) && $SK['section_heading_size'] <> ''){
		$custom_css.='.page-area .title h1,.page-area .title h1 strong,.page-area .title h2,.page-area .title h2 strong{font-size:'.$SK['section_heading_size'].'px;}'.PHP_EOL;
	   }
	   if(isset($SK['section_subtitle_size']) && $SK['section_subtitle_size'] <> ''){
		$custom_css.='.page-area .title p{font-size:'.$SK['section_subtitle_size'].'px;}'.PHP_EOL;
	   }
	   if(isset($SK['contact_background']['url']) && $SK['contact_background']['url'] <> ''){
		 $custom_css.='#contact{background:url('.esc_attr($SK['contact_background']['url']).') repeat center fixed;background-size:cover;}'.PHP_EOL; 
	   }
	   if(isset($SK['contact_background_color']) && $SK['contact_background_color'] <> ''){
		 $custom_css.='#contact{background-color:'.$SK['contact_background_color'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['contact_text_color']) && $SK['contact_text_color'] <> ''){
		 $custom_css.='#contact,#contact .title h1 strong,#contact,#contact .title h2 strong,#contact .title p,.contactway{color:'.$SK['contact_text_color'].';}'.PHP_EOL; 
                 $custom_css.='#contact .contactway{border-color:'.$SK['contact_text_color'].';filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}';
	   }
	   if(isset($SK['contact_input_background']) && $SK['contact_input_background'] <> ''){
		 $custom_css.='.contactform input,.contactform textarea{background:'.$SK['contact_input_background'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['contact_input_text']) && $SK['contact_input_text'] <> ''){
		 $custom_css.='.contactform input,.contactform textarea{color:'.$SK['contact_input_text'].';}'.PHP_EOL; 
		 $custom_css.='#contactName::-moz-placeholder {color:'.$SK['contact_input_text'].';}
                       ::-webkit-input-placeholder {color:'.$SK['contact_input_text'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['contact_btn_background']) && $SK['contact_btn_background'] <> ''){
		 $custom_css.='.contactform .contact-btn{background:'.$SK['contact_btn_background'].';}'.PHP_EOL; 
	   }
	   if(isset($SK['contact_btn_text']) && $SK['contact_btn_text'] <> ''){
		 $custom_css.='#contact .contactform .contact-btn{color:'.$SK['contact_btn_text'].';text-shadow:none;}'.PHP_EOL; 
	   }
   }
   if(sk_is_mobile() && !is_home()){
       $custom_css.='.portfolio-item{display:none;}';
   }
   if(!isset($SK['isResponsive']) || $SK['isResponsive']==1){
	   if(isset($SK['show_mobile_logo']) && $SK['show_mobile_logo'] == 1){
		   $custom_css.='@media only screen and (max-width: 767px) {
					h1#site-logo,
					h1#site-logo a{width:60%;height:60px;background-size:100%;background-position:center;}
					:root .css3-selectbox{
						 display:inline-block;
						 width:40%;
						 float:right;
						 margin-right:15px;
					}
		   }'.PHP_EOL;
	   }else{
		  $custom_css.='@media only screen and (max-width: 767px) {
					:root .css3-selectbox{width:95%;display:inline-block;margin:15px;}
					h1#site-logo{display:none;}
					}'.PHP_EOL;
	   }
   }
   $custom_css.='</style>'.PHP_EOL;
   $custom_css.='<link href="'.get_template_directory_uri().'/custom.css" type="text/css" rel="stylesheet" />'.PHP_EOL;
   if(!isset($SK['isResponsive']) || $SK['isResponsive']==1){
     $custom_css.='<link href="'.get_template_directory_uri().'/assets/css/media-queries.css" type="text/css" rel="stylesheet" />'.PHP_EOL;
   }
   $custom_css.='<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext" type="text/css" rel="stylesheet" />'.PHP_EOL;
   echo $custom_css;
}

/*Add some CSS or JS code to head*/
function sk_additional_code() {
   global $SK;
   if(isset($SK['additional_code'])&&$SK['additional_code'] <> ""){  
     echo stripslashes($SK['additional_code']); 
   } 
}

/*Add statistics code to footer*/
function sk_footer_code() {
   global $SK;
   if(isset($SK['footer_code'])&&$SK['footer_code'] <> ""){  
   echo stripslashes($SK['footer_code']); 
   } 
}

/*Customize meta box*/
function sk_customize_meta_boxes() {
     remove_meta_box('postcustom','post','normal');
}
//add_action('admin_init','sk_customize_meta_boxes');


/*Add page excerpt textarea*/
function sk_page_excerpt_metabox() {
    add_meta_box( 'postexcerpt', __('Excerpt','van'), 'post_excerpt_meta_box', 'page', 'normal', 'high' );
}
//add_action( 'admin_menu', 'sk_page_excerpt_metabox' );

/*Add items in profile;*/
function sk_custom_profile( $contactmethods ) {
    $contactmethods['telephone'] = 'Telphone';
	$contactmethods['address'] = 'Address';
    unset($contactmethods['aim']);
    unset($contactmethods['yim']);
    unset($contactmethods['jabber']);
    return $contactmethods;
}
//add_filter('user_contactmethods','sk_custom_profile',10,1);

/*Add widget in dashboard*/
function sk_dashboard_widget() {
	echo 'Content here';
}
function sk_add_dashboard_widgets() {
    wp_add_dashboard_widget('sk_dashboard_widget', 'Title', 'sk_dashboard_widget');
}
//add_action('wp_dashboard_setup', 'sk_dashboard_widgets' );
?>