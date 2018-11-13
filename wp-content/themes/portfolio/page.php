<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 */

get_header(); 

while ( have_posts() ) : the_post(); ?>

<div id="standardPage">
	<div class="content">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<div class="clear"></div>
	</div>
</div><!--#standardPage-->

<?php	endwhile; 

get_footer();