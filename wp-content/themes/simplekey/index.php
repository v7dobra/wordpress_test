<?php get_header();?>

<div id="container">
    <?php 
	  sk_check_menu();
	  get_template_part('template-parts/content','pages');
	  wp_reset_query();
	  get_template_part('template-parts/content','contact');
	?> 
    
</div>
<?php get_footer();?>