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

   Template Name: Räumlichkeiten Page

 */

get_header(); ?>

   
   <div class="template_gallery"> 
      <div class="gallery-all"> 
          <p style="text-align: center; margin-top: 20px;">
              <?php while(have_posts()): the_post(); ?>
               <font face="Verdana" size="3"><?php the_content(); ?> </font><br>
               &nbsp;</font> 
             <?php endwhile; ?>
            </p>


        <?php 
        $gallery = new WP_Query(array(
          'post_type'         => 'raumlichkeiten',
          'posts_per_page'    => -1,
        ));


        while( $gallery->have_posts()):  $gallery->the_post(); ?>
         <div class="gallery-box"> 
            <a href="<?php echo the_post_thumbnail_url(); ?>" data-lightbox="roadtrip" data-title="My caption" ><?php the_post_thumbnail(); ?></a>
         </div>
         <?php endwhile; ?>


      </div>


   </div>







<?php get_footer();