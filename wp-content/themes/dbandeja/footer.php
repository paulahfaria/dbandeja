<?php $options = get_option('dbandeja'); ?>
		</div>
	</div><!--#page-->
</div><!--.main-container-->
<footer>
	<div class="container">
		<div>
			<div class="footer-widgets">

				<?php if($options['mts_author_box'] == '1') { ?>
					<div class="postauthor">
						<h4><?php bloginfo('name') ?></h4>
						<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '135' );  } ?>
						<p><?php bloginfo('description') ?></p>
					</div>
				<?php } ?> 		

				<div>
					<?php widgetized_footer(); ?>

						<h3><?php _e('Search', 'mythemeshop'); ?></h3>
						<?php get_search_form(); ?>
				</div>

			</div>			

			<div class="copyrights">
				<?php mts_copyrights_credit(); ?>
			</div> 
            <div class="top">
                <a href="#top" class="toplink">   </a></div>
		</div><!--.footer-widgets-->
	</div><!--.container-->
</footer><!--footer-->
<?php mts_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>