<?php 
/*Template Name: Portfolios Archives*/

global $SK;
get_header();
?>

<div id="container">

    <!--Page-->
    <section id="portfolio-tpl" class="page-area">
      <div class="wrapper">
       <?php while(have_posts() ) : the_post();?>
       <?php
       //Set Heading text
      $mainHeading=get_post_meta($post->ID, "page_mainheading_value", true);
      $subHeading=get_post_meta($post->ID, "page_subHeading_value", true);
      $hideTitle=get_post_meta($post->ID, "hide_title_value", true);
      if($mainHeading=='')$mainHeading=get_the_title();
      ?>
         <?php if($hideTitle!='Yes'):?>
           <header class="title">
              <h1><strong><?php echo $mainHeading;?></strong></h1>
              <?php if($subHeading<>''):?><p><?php echo $subHeading;?></p><?php endif;?>
           </header>
         <?php endif;?>
        <?php endwhile;?>
        
        <div class="entry">
        <?php
        sk_content(true,true);
        wp_link_pages('<div class="sk_pagenavi">', '</div>', 'number');

        echo sk_category_filter('paged',0,'','','portfolios','',false);
        $limit = get_option('posts_per_page');
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        query_posts('post_type=portfolio&posts_per_page='.$limit.'&paged='.$paged);
        get_template_part('template-parts/content','portfolios');
        ?> 
       </div>
      </div>
    </section>

    <script type="text/javascript">
    jQuery(document).ready(function($){
       $(window).load(function(){
        $("#portfolios-paged").isotope({ 
          itemSelector: ".portfolio-item",
          animationEngine: "best-available",
          filter: "*"
         });
         
         $("#filter-paged a").click(function(){
        var selector = $(this).attr("data-filter");
        $("#portfolios-paged").isotope({ 
          filter: selector
        });
        $(this).parent().attr("class","filter_current");
        $(this).parent().siblings().removeAttr("class");
        return false;
       });
      });
    });
    </script>
    
    <?php get_template_part('content','contact');?>
</div>
<?php get_footer();?>