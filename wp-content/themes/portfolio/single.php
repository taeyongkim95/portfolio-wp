<?php
/**
* The Template for displaying all single posts
*
*/

get_header();

  // Start the Loop.
  while ( have_posts() ) : the_post();

	/*
	* Include the post format-specific template for the content. If you want to
	* use this in a child theme, then include a file called called content-___.php
	* (where ___ is the post format) and that will be used instead.
	*/
	?>
		<div class="container" style="padding-bottom:40px;">
      <div id="postContainer">
		  <h1 class="post-title"><?php the_title();?></h1>
		  <?php the_content();?>
		<!--content-->

    <div class="verdict">

      <div class="grading_criteria">
        <?php
          // check if the repeater field has rows of data
          if( have_rows('grading_criteria') ):
            // loop through the rows of data
              while ( have_rows('grading_criteria') ) : the_row();?>
                <div class="criteria_left"><p><?php echo get_sub_field('criteria');?></p></div>
                <div class="criteria_right"><p><?php echo get_sub_field('score');?></p></div>
                <div class="criteria_details"><p><?php echo get_sub_field('details');?></p></div>
              <?php endwhile;
          else :
              // no rows found
          endif;
          ?>
      </div>

      <div class="positive_negative">
        <?php
          // check if the repeater field has rows of data
          if( have_rows('positives') ):
            // loop through the rows of data
              while ( have_rows('positives') ) : the_row();?>
                <li>+ <?php echo get_sub_field('positives');?></li>
              <?php endwhile;
          else :
              // no rows found
          endif;
          ?>

          <?php
            // check if the repeater field has rows of data
            if( have_rows('negatives') ):
              // loop through the rows of data
                while ( have_rows('negatives') ) : the_row();?>
                  <li>- <?php echo get_sub_field('negatives');?></li>
                <?php endwhile;
            else :
                // no rows found
            endif;
            ?>
      </div>


      <div class="best_scenes">
        <p>Best Scenes:
      <?php
        // check if the repeater field has rows of data
        if( have_rows('best_scenes') ):
          // loop through the rows of data
            while ( have_rows('best_scenes') ) : the_row();?>
              <?php echo get_sub_field('best_scenes');?>
            <?php endwhile;
        else :
            // no rows found
        endif;
        ?>
        <p>
      </div>


      <h1><?php echo get_field('final_score');?></h1>
      <h2><?php echo get_field('final_comment');?><h2>
    </div>

    </div>
	</div><!--#standardPage-->

  <?php endwhile;

get_footer();
