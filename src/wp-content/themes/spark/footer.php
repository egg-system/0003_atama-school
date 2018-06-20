<?php
/* 	SPARK Theme's Footer
	Copyright: 2014-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since SPARK 1.0
*/
?>


</div><!-- container -->

<!--- ============  CONTACT  =========== ------------>
<div class="clear"></div>
<div class="socialcontainer">
<div class="social social-link">
	  <?php foreach (range(1, 5 ) as $numslinksn) { 
	  if ( esc_url(spark_get_option('sl' . $numslinksn, '#')) != '' ): echo '<a href="'. esc_url(spark_get_option('sl' . $numslinksn, '#')) .'" target="_blank"> </a>'; endif;
	  } ?>
</div>
</div>

<div id="footer">

<div id="footer-content">

<?php get_sidebar( 'footer' ); ?>

<div id="creditline"><?php echo '&copy; ' . date("Y"). ': ' . get_bloginfo( 'name' ) ; ?> | SPARK Theme by: <a href="<?php echo esc_url(
'http://d5creation.com'); ?>" target="_blank"><img  src="<?php echo get_template_directory_uri(); ?>/images/d5logofooter.png" /> D5 Creation</a> | Powered by: <a href="http://wordpress.org" target="_blank">WordPress</a></div>

</div> <!-- footer-content -->
</div> <!-- footer -->
<?php wp_footer(); ?>
</body>
</html>