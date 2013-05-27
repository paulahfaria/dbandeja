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
						<div class="author-description">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/sobre-dbandeja.png" alt="">
							<p><?php bloginfo('description') ?></p>
						</div>
					</div>
				<?php } ?> 		

				<div class="footerWidgets">
					<h4>
						BUSCA POR TAGS
					</h4>
					<br>
					<?php widgetized_footer(); ?>

						<h3><?php _e('Search', 'mythemeshop'); ?></h3>
						<?php get_search_form(); ?>
				</div>

			</div>			

			<div class="copyrights">
				Copyright 2012 - Todos os direitos reservados para DBandeja - www.dbandeja.com.br - contato@dbandeja.com.br
			</div> 
            <!-- <div class="top">
                <a href="#top" class="toplink">   </a></div> -->
		</div><!--.footer-widgets-->
	</div><!--.container-->
</footer><!--footer-->
<?php mts_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>