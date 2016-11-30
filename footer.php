	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="row">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>

<footer class="full-width" role="contentinfo">
	<div class="row">
		
		<div class="large-6 columns" id="contact-footer">
			 <h3>Contact</h3>
			 <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact (middle footer)')) : ?>
            
<?php endif; ?>

		</div>
		<div class="large-6 columns" id="sponsors-footer">
			<h3>Supporters</h3>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sponsors (right Footer)')) : ?>
            
<?php endif; ?>
		</div>

	</div>
	<hr>
	<div class="row">
		<div class="large-4 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>
		</div>
		<div class="large-4 columns">
			<p>Registered charity 1136675 </p>
		</div>
		<div class="large-4 columns">
			<p>Website designed by <a href="#" title="Link to DanielJSimmons.uk Website"> Danieljsimmons.uk<a/> </p>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>