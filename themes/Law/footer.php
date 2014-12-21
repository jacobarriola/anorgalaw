		</div> <!-- end #container -->
        
        <div id="footer">
			<div id="footer-content" class="clearfix">
            <div  style="width: 960px; margin: 0 auto">
				<div id="footer-widgets" class="clearfix">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
					<?php endif; ?>
				</div> <!-- end #footer-widgets -->
				<div style="text-align: center; padding: 20px 0;">
					<p style="color: #fff;">&copy Copyright <?php echo date('Y'); ?>.  The Anorga Law Firm, Inc.</p>
				</div>
				
			</div> <!-- end #footer-content --></div>
		</div> <!-- end #footer -->
	
	<?php get_template_part('includes/scripts'); ?>
	<?php wp_footer(); ?>
</body>
</html>