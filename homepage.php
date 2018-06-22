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

   Template Name: Home Page

 */

get_header(); ?>

 <!-- end of menu -->
         <div id="templatemo_top_dishes">


            <?php 

            $top_menu = get_field('top_menu');


            if( $top_menu):  

            foreach( $top_menu as $menusas): ?>

            <div class="top_dishes_box">
               <img src="<?php echo  $menusas['image_menu']['url']; ?>" alt="image" width="205" height="150" /> 
               <h2><?php echo  $menusas['title_menu']; ?> </h2>
               <p><?php echo  $menusas['subtitle_menu']; ?></a></p>
            </div>
            <?php endforeach; endif; ?>



            
            <div class="cleaner">&nbsp;</div>
         </div>
         <!-- end of top dishes -->
         <div id="templatemo_content">
            <span class="top"></span>
            <div id="templatemo_innter_content">
               <div id="templatemo_content_left">

                  <?php 
                  $left_part_title = get_field('left_part_title');

                  if($left_part_title):   ?>
                  <h1><i><?php echo $left_part_title; ?></i></h1>
                <?php endif; ?>

                 <?php 
                  $left_part_image = get_field('left_part_image');

                  if($left_part_image):   ?>
                  <img src="<?php echo  $left_part_image['url']; ?>" alt="<?php echo  $left_part_image['title']; ?>" width="160" height="190" />
                   <?php endif; ?>

                   <?php 
                  $left_part_content = get_field('left_part_content');

                  if($left_part_content): echo $left_part_content;  

                  endif; ?>


                  <div style="clear:  padding:both; 30px 0 20px 0;">
                     &nbsp;&nbsp;


                 <?php 
                  $schedule_content = get_field('schedule_content');

                  if($schedule_content): echo $schedule_content;  

                  endif; ?>


                    
                  </div>
                  <div class="cleaner_with_height" style="width: 545; height: 178"><br>
                     &nbsp;&nbsp;</a> 
                  </div>
               </div>
               <!-- end of content left -->
               <div id="templatemo_content_right">
                  <!--               <p>Authentischen asiatische Küche</p>-->
                  <div class="right_column_section" style="width: 190; height: 230">
                     &nbsp;
                     <p>
                      <?php 
                      $right_image = get_field('right_image');

                      if($right_image):   ?>
                      <img src="<?php echo  $right_image['url']; ?>" alt="<?php echo  $right_image['title']; ?>" width="160" height="190" />
                   <?php endif; ?>
                     </p>
                     <p>&nbsp;</p>

                      <?php 
                  $right_content = get_field('right_content');

                  if($right_content): echo $right_content;  

                  endif; ?>
                     
                  </div>
               </div>
               <!-- end of content right -->
               <div class="cleaner">&nbsp;</div>
            </div>
         </div>

<?php get_footer();