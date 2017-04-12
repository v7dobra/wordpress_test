<header id="top">
 <div id="sticky-top">  
  <?php sk_sticky_header();?>
  <nav id="primary-menu">
    <h1 id="site-logo"><a href="<?php echo esc_url(home_url('/'));?>/#top" title="<?php bloginfo('description');?>"><span><?php bloginfo('name');?></span></a></h1>
    
    <div class="top_social">
    <?php sk_social_icons();?>
    </div>

    <div id="primary-menu-container">
         <?php 
         $menu_slug = esc_attr(get_post_meta( get_the_ID(), 'page_menu_value', true ));
         wp_nav_menu(array(
          'theme_location' => 'primary_navi',
         // 'menu' => $menu_slug,
          'container' => '',
          'menu_class' => 'sf-menu',
          'fallback_cb' => 'sk_scroll_pagemenu',
          'echo' => true,
          'walker'=> new Description_Walker,
          'depth' => 4) );
     ?>
    </div>
    <div id="mobileMenu"></div>
  </nav>
 </div>
  
  <?php 
    /*
     * Since Simplekey 2.0, we deprecated the default slider 
     * and start to use Revolution Slider.
     */
     
     if(is_home()){
       sk_revslider('home_revslider');
     }
     
  ?>
  
</header>