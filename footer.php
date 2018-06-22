<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jungarden
 */

?>

	

 <div id="templatemo_footer">
           <div class="footer-top"> 
				 <div class="left-footer"> 

		<?php 

		wp_nav_menu(array(
			'theme_location'		=> 'footer-menu',
			'fallback_cb'			=> 'default_menu',
		));

		 ?>
            	
                
            </div>
            <?php 
         	$facebook_link = get_field('facebook_link','options');
        	  if($facebook_link): ?>

            <div class="right-footer"> 
               <a href="<?php echo $facebook_link['url']; ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook" width="17" height="24" /></a><b><font size="2" color="#000000">
               <a class="text-right" href="<?php echo $facebook_link['url']; ?>"><?php echo $facebook_link['title']; ?></a>
            </div>

			<?php endif; ?>

            <br />
            </span>
           </div>
           	 <?php 
         	$copy_right_text = get_field('copy_right_text','options');
        	  if($copy_right_text): ?>
            <div class="footer-copy"> 
				<font color="#808080" size="1" face="Verdana"><?php echo $copy_right_text; ?></font>
            </div>
       		 <?php endif; ?>
         </div>
      </div>


      <?php wp_footer(); ?>
   </body>
</html>