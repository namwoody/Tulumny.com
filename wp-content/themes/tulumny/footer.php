<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer>

<?php
	get_sidebar( 'footer' );
?>

		<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>

		<?php do_action( 'starkers_credits' ); ?>
		
		<a href="<?php echo esc_url( __('http://wordpress.org/', 'starkers') ); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'starkers'); ?>" rel="generator"> 
			<?php printf( __('Proudly powered by %s.', 'starkers'), 'WordPress' ); ?>
		</a>

	</footer>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>