<?php get_header();?>

<div id="container">

    <!--Blog Archive-->
    <section id="content" class="page-area">
       <div class="wrapper">
           <header class="title">
              <h1><?php printf(__('Result of <strong>%s</strong>', 'SimpleKey'), $_GET['s']); ?></h1>
              <p><?php printf(__('Browsing all posts about <strong>%s</strong>', 'SimpleKey'), $_GET['s']); ?></p>
           </header>
         
         <div class="line"></div>
         
           <?php
			   if($_GET['post_type']=='portfolio'){
			     get_template_part('template-parts','content-portfolios');
			   }elseif($_GET['post_type']=='post'){
				 add_filter('pre_get_posts','sk_searchFilter');
			     get_template_part('template-parts','content-loop');
			   }
		   echo sk_pagenavi();
		  ?>
       </div>
    </section>
    
    <?php get_template_part('template-parts','content-contact');?>
</div>
<?php get_footer();?>