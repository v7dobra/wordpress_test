<?php 
ob_start();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8"> 
<?php if(!isset($SK['isResponsive']) || $SK['isResponsive']==1):?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/>
<?php endif;?>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="ajax-load">
  <div id="close"><i class="fa fa-times"></i></div>
  <div id="ajax-content"></div>
</div>
<?php sk_header();?>