<?php
   /**
    * The main template file
    *
    * This is the most generic template file in a WordPress theme
    * and one of the two required files for a theme (the other being style.css).
    * It is used to display a page when nothing more specific matches a query.
    * E.g., it puts together the home page when no home.php file exists.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package jungarden
   
      Template Name: Speisekarten Page
   
    */
   
   get_header(); ?>

<br>
 <?php 
   $speisekarten_text = get_field('speisekarten_text');

   if($speisekarten_text): echo $speisekarten_text;  

   endif; ?>


<div class="top-menus"> 


      <?php 

      $first_two_menu = get_field('first_two_menu');


      if( $first_two_menu):  

      foreach( $first_two_menu as $fmenu): ?>
         
      <div class="menu-box"> 
         <a href="<?php echo  $fmenu['first_link']['url']; ?>">
            <img border="0" src="<?php echo  $fmenu['first_image']['url']; ?>" width="215" height="150" ></a>
            <p><?php echo  $fmenu['first_link']['title']; ?></p>
      </div>

      <?php endforeach; endif; ?>


  
</div>

<br>
<br>
<div class="bottom-menus"> 
   
   
     <?php 

      $first_two_menu_copy = get_field('first_two_menu_copy');


      if( $first_two_menu_copy):  

      foreach( $first_two_menu_copy as $fenuopy): ?>
         
      <div class="menu-box"> 
         <a href="<?php echo  $fenuopy['first_link']['url']; ?>">
            <img border="0" src="<?php echo  $fenuopy['first_image']['url']; ?>" width="215" height="150" ></a>
            <p><?php echo  $fenuopy['first_link']['title']; ?></p>
      </div>

      <?php endforeach; endif; ?>


</div>










<?php get_footer();

