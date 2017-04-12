<?php
/*Import data*/
if ( ! function_exists( 'sk_import_files' ) ) :
function sk_import_files() {
    return array(
        array(
            'import_file_name'             => 'Illustrator',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/default/content.xml',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'includes/demo/default/options.json',
                    'option_name' => 'VAN',
                ),
            ),
            'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'inc/demo/default/screenshot.png',
            'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported. If you also want to import the WooCommerce demo data, please activate WooCommerce first.', 'SimpleKey' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'sk_import_files' );
endif;


if ( ! function_exists( 'sk_after_import' ) ) :
function sk_after_import( $selected_import ) {
        //Set Menu
        $primary_menu = get_term_by('name', 'primary menu', 'nav_menu');
        $footer_menu = get_term_by('name', 'footer menu', 'nav_menu');
        set_theme_mod( 'nav_menu_locations' , 
            array( 
                  'primary_navi' => $primary_menu->term_id,
                  'footer_navi' => $footer_menu->term_id
                 ) 
        );

        if ( class_exists( 'RevSlider' ) ) {
           $slider_array = array(
                  get_template_directory()."/inc/demo/default/home_slider.zip"
            );

          $slider = new RevSlider();
           
          foreach($slider_array as $filepath){
           $slider->importSliderFromPost(true,true,$filepath);  
          }
           
          echo ' Slider processed';
        }

}
add_action( 'pt-ocdi/after_import', 'sk_after_import' );
endif;