<?php get_template_part( 'spine' ); ?>

<?php get_template_part('parts/after-main'); ?>
</div><!--/binder-->
<?php get_template_part('parts/after-binder'); ?>
</div><!--/jacket-->

<?php get_template_part('parts/after-jacket'); ?>

<?php get_template_part('parts/contact'); ?>

<?php wp_footer(); ?>

			
</div>	<!--/wrapper-->
<div id="footer-wrap">	
	<div id="footer">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>	
</div>
</body>
</html>
