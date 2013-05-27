<?php get_header(); ?>
<?php $options = get_option('dbandeja'); ?>
<div id="page" class="single">
	<div class="content">
		<article class="article">
			<div id="content_box" >
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('g post'); ?>>
						<div class="single_post">
							<header>
								<h1 class="title single-title"><?php the_title(); ?></h1>
								<?php if($options['mts_headline_meta'] == '1') { ?>
									<div class="post-info"><span class="theauthor"><?php _e('by ','mythemeshop'); the_author_posts_link(); ?></span>&nbsp; <span class="thetime"><?php _e(' ','mythemeshop'); the_time('j/m/Y | g:i'); ?></span>
                                    <span class="thecomment"><a href="<?php comments_link(); ?>"><?php echo comments_number( '0', '1', '%' );?></a></span>
                                    <span class="thecategory"><?php _e('Postado em ','mythemeshop'); the_category(', ') ?></span>&nbsp;</div>
								<?php } ?>
							</header><!--.headline_area-->
							<div class="post-single-content box mark-links">
								<?php if ($options['mts_posttop_adcode'] != '') { ?>
									<?php $toptime = $options['mts_posttop_adcode_time']; if (strcmp( date("Y-m-d", strtotime( "-$toptime day")), get_the_time("Y-m-d") ) >= 0) { ?>
										<div class="topad">
											<?php echo $options['mts_posttop_adcode']; ?>
										</div>
									<?php } ?>
								<?php } ?>
								<?php the_content(); ?>
								<?php custom_link_pages(array('before' => '<div class="pagination">' . __(''), 'after' => '</div>', 'next_or_number' => 'next_and_number', 'nextpagelink' => __('Next'), 'previouspagelink' => __('Previous'), 'pagelink' => '%','echo' => 1 )); ?>
								<?php if ($options['mts_postend_adcode'] != '') { ?>
									<?php $endtime = $options['mts_postend_adcode_time']; if (strcmp( date("Y-m-d", strtotime( "-$endtime day")), get_the_time("Y-m-d") ) >= 0) { ?>
										<div class="bottomad">
											<?php echo $options['mts_postend_adcode'];?>
										</div>
									<?php } ?>
								<?php } ?> 
								<?php if($options['mts_tags'] == '1') { ?>
									<div class="tags"><?php the_tags('<span class="tagtext">Tags:</span>',', ') ?></div>
								<?php } ?>
							</div>
						</div><!--.post-content box mark-links-->
						<?php if($options['mts_related_posts'] == '1') { ?>	
							<?php $categories = get_the_category($post->ID); if ($categories) { $category_ids = array(); foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id; $args=array( 'category__in' => $category_ids, 'post__not_in' => array($post->ID), 'showposts'=>2, 'caller_get_posts'=>1, 'orderbye' => 'rand' );
							$my_query = new wp_query( $args ); if( $my_query->have_posts() ) {
								echo '<div class="related-posts"><div class="postauthor-top"><h3>'.__('Posts Relacionados','mythemeshop').'</h3></div>';
								while( $my_query->have_posts() ) { ++$counter; if($counter == 2) { $postclass = 'last'; $counter = 0; } else { $postclass = ''; } $my_query->the_post();?>
								<div class="post excerpt <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
								<?php if ( has_post_thumbnail() ) { ?> 
									<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('featured',array('title' => '')); echo '</div>'; ?>
								<?php } else { ?>
									<div class="featured-thumbnail">
										<img width="287" height="172" src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
									</div>
								<?php } ?>
							</a>
	                        <header>						
								<div class="title">
									<div class="thetime">
										<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php _e(' ','mythemeshop'); the_time('j/n/Y'); ?></a>
									</div>
									<span class="thecomment"><a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a> Comentários</span>
								</div>
							</header><!--.header-->
							<div class="post-content image-caption-format-1">
								<h2 class="home-title"><?php the_title(); ?></h2>
								<div class="excerpt"><?php echo excerpt(17);?></div>
								<a class="read-more" href="">Ver Mais</a>
							</div>
	                        <div style="display:none" class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php _e('Read More','mythemeshop'); ?></a></div>
						</div><!--.post excerpt-->
								<?php } echo '</div>'; }} wp_reset_query(); ?>
							<!-- .related-posts -->
                        <?php }?>  

					</div><!--.g post-->
					<?php comments_template( '', true ); ?>
				<?php endwhile; /* end loop */ ?>
			</div>
		</article>
		<?php get_sidebar(); ?>
<?php get_footer(); ?>