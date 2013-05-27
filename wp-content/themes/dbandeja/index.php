<?php $options = get_option('dbandeja'); ?>
<?php get_header(); ?>
<div id="page">
	<div class="content">
		<article class="article">
			<div id="content_box">
				<?php $p = 1; if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php if($p == 1 && is_home()){ ?>

					<div class="post highlight">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
							<?php if ( has_post_thumbnail() ) { ?> 
								<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('highlight',array('title' => '')); echo '</div>'; ?>
							<?php } else { ?>
								<div class="featured-thumbnail">
									<img width="100%" src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
								</div>
							<?php } ?>
						</a>
                        <header>						
							<div class="title">
								<div class="thetime">
									<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php _e(' ','mythemeshop'); the_time('j/n/Y'); ?></a>
								</div>
								<span class="thecomment"><a href="<?php comments_link(); ?>"><?php comments_number('0','1','%'); ?></a> Comentários</span>
								<br/>
								<h2 class="home-title"><?php the_title(); ?></h2>
							</div>
						</header><!--.header-->
						<div class="post-content image-caption-format-1">
							
							<div class="excerpt"><?php echo excerpt(17);?></div>
							<a class="read-more" href="">Ver Mais</a>
						</div>
                        <div style="display:none" class="readMore"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php _e('Read More','mythemeshop'); ?></a></div>
					</div><!--.post excerpt-->

					<?php }else{ ?>

					<div class="post excerpt <?php echo (++$j % 2 == 0) ? 'last' : ''; ?>">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="nofollow" id="featured-thumbnail">
							<?php if ( has_post_thumbnail() ) { ?> 
								<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail('featured',array('title' => '')); echo '</div>'; ?>
							<?php } else { ?>
								<div class="featured-thumbnail">
									<img width="284" height="150" src="<?php echo get_template_directory_uri(); ?>/images/nothumb.png" class="attachment-featured wp-post-image" alt="<?php the_title(); ?>">
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

					<?php } ?>

				<?php $p++; endwhile; else: ?>
					<div class="post excerpt">
						<div class="no-results">
							<p><strong><?php _e('Conteúdo não encontrado', 'mythemeshop'); ?></strong></p>
							<p><?php _e('A página ou conteúdo buscado, não foi encontrado. Por favor tente novamente.', 'mythemeshop'); ?></p>
							<?php get_search_form(); ?>
						</div><!--noResults-->
					</div>
				<?php endif; ?>	
				<?php if ($options['mts_pagenavigation'] == '1') { ?>
					<?php pagination($additional_loop->max_num_pages);?>
				<?php } else { ?>
					<div class="pnavigation2">
						<div class="nav-previous"><?php next_posts_link( __( '&larr; '.'Older posts', 'mythemeshop' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts'.' &rarr;', 'mythemeshop' ) ); ?></div>
					</div>
				<?php } ?>
			</div>
		</article>
		<?php get_sidebar(); ?>
<?php get_footer(); ?>