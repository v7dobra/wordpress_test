<?php 
global $SK;
get_header();
if(isset($SK['blogSidebar']) && $SK['blogSidebar']==0){
  get_template_part('template-parts/single','right-sidebar');
}else{
  get_template_part('template-parts/single','default');
}
get_footer();
?>