<?php
/**
 * The template for displaying the footer.
 */

?>

<?php if ( is_active_sidebar( 'pinbin_footer')) { ?>
   <div id="footer-area">
			<?php dynamic_sidebar( 'pinbin_footer' ); ?>
        </div><!-- // footer area with widgets -->
<?php }  ?>
<footer class="site-footer">
	 <div id="copyright">
    <?php _e( '<p>Theme "Cosmo Pinbin" based on "pinbin" by Stéphane BILLOIS and <a href="http://colorawesomeness.com/themes/">Color Awesomeness</a> | <a href="https://github.com/cosmonet-fr/cosmo_pinbin"> source code of Cosmo Pinbin</a> in GNU GENERAL PUBLIC LICENSE Version 2', 'Stéphane BILLOIS' ); ?>  |
		<?php _e( 'Copyright', 'pinbin' ) ?> <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> |
		<?php _e( 'Powered by' , 'pinbin' ); ?> <a href="http://www.wordpress.org" target="_blank" title="<?php _e( 'Powered by WordPress' , 'pinbin</p>' ); ?>">WordPress</a>
	 </div><!-- // copyright -->
</footer>
<!--</div>--><!-- // close wrap div -->

<?php wp_footer(); ?>

</body>
</html>
