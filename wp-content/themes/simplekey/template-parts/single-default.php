<div id="container">

    <!--Single Page-->
    <section class="page-area" id="single-content">
       <div class="wrapper">
          <div id="breadcrumbs">
            <span class="nav-previous"><?php previous_post_link( '%link', __( '&larr; Previous', 'SimpleKey' ) ); ?></span>
      <span class="nav-next"><?php next_post_link( '%link', __( 'Next &rarr;', 'SimpleKey' ) ); ?></span>
          </div>

           <?php while (have_posts()) : the_post(); ?>
            <article class="post">
               <?php sk_posted_on();?>
               <h2><?php the_title();?></h2>
               <div class="entry">
                   <?php sk_content(true,true);?>
                  <?php wp_link_pages('before=<div class="sk-pagenavi">&after=</div>');?> 
               </div>
               <div class="clearfix"></div>
           </article>
           <?php endwhile;?>
          
           <?php comments_template(); ?>
       </div>
    </section>
    
    <?php get_template_part('template-parts/content','contact');?>
</div>