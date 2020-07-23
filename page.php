
<?php 

/**
 * The template for displaying all single posts
 *
 * @link https://localhost:8888
 *
 * @package WordPress
 * @subpackage vortx
 * @since vortx 1.0.0
 */
   get_header();
?>
  

   <div class="container">
			
	<?php
			
     if(have_posts()) {
			while(have_posts()) {
			the_post();
			
			?>	
							
		<?php the_content(); 
			
	  
			 }
			}
		
		
	
?>
</div>


	<?php get_footer();

?> 
	