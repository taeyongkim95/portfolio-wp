<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */

get_header(); 


?>

<div id="mainIndex">
		
	<div id="contentArea">


	<h1>
		<?php the_title();?>
	</h1>
	
	
	<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_type() );
				
			endwhile;
		twentyfourteen_paging_nav();	

		else :
		
		get_template_part( 'content', 'none' );

		endif;
	?>

	</div><!-- #contentArea -->
	
	<div id="sidebar">
	
	  <?php get_sidebar(); ?>
	
	</div><!-- #sidebar-->
		
		
	
</div><!-- #mainIndex -->

<?php

get_footer();
