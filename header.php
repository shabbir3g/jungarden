<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jungarden
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      <meta name="keywords" content="Jun Garden Restaurant, Amriswil Gourmet Restaurant, CSS, XHTML" />
      <meta name="description" content="Jun Garden Restaurant, Amriswil Gourmet Restaurant" />
      <?php wp_head(); ?>
   </head>
   <body>
      <div id="templatemo_container">
         
         <?php 
         $logo_upload = get_field('logo_upload','options');
          if($logo_upload): ?>
         <div id="templatemo_header">
            <div style="background: url('<?php echo $logo_upload['url']; ?>') no-repeat bottom;; padding-left:0; padding-right:0; padding-top:60px; padding-bottom:10px" id="site_title">&nbsp;</div>
         </div>
         <?php endif; ?>


         <!-- end of header -->
         <div id="templatemo_menu">


		<?php 

		wp_nav_menu(array(
			'theme_location'		=> 'main-menu',
			'container'				=> '',
			'fallback_cb'			=> 'default_menu',
		));

		 ?>
       
         </div>
         <!-- end of menu -->