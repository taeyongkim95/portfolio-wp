<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 */
 wp_footer();
 ?>


</div><!--mainContainer-->

<div class="u-clear"></div><!--mainContainer is floated-->


<div id="footer" class="footer">
	<?php include('footer-content.php'); ?>
</div><!--#footer-->

<?php include('nav-menu.php'); ?>

<?php include('scripts.php'); ?>
<script src=<?php echo get_template_directory_uri();?>/public/js/main.js></script>

</body>
</html>
