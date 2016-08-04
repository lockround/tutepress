<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lockrounds
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	   <div class="container">
	   	<div class="col-md-6 col-sm-6">
		 <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lockrounds' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lockrounds' ), 'WordPress' ); ?></a>
			
			<p><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lockrounds' ), 'lockrounds', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?></p>
		 </div><!-- .site-info -->
		   <div class="social_icons_footer">
	   		<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	   	   </div>
		</div>
	   	<div class="col-md-6 col-sm-6">
	   		
	   	</div>
	   </div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
