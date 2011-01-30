<?php
/**
 * @package WordPress
 * @subpackage Coraline
 * @since Coraline 1.0
 */
?>
	</div><!-- #content-box -->

	<div id="footer" role="contentinfo">
		<?php get_sidebar( 'footer' ); ?>

		<div id="colophon">
			<p>
                        Copyrighted &copy; 1980 &ndash; <?php echo date("Y") ?> by <a href="http://mattrude.com/">Matt Rude</a><br />
			<?php if ( is_user_logged_in() ) { ?>
                        	This page took <?php timer_stop(1); ?> seconds of computer labor, and required <?php echo get_num_queries(); ?> questions to produce.</p>
			<?php } ?>
		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>
