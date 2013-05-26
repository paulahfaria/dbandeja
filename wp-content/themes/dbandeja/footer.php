<?php $options = get_option('dbandeja'); ?>
		</div>
	</div><!--#page-->
</div><!--.main-container-->
<footer>
	<div class="container">
		<div class="footer-widgets">
			<div>

				<div><?php widgetized_footer(); ?></div>
				

				<div></div>
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