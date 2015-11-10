<?php get_header(); ?>
	<section id="news" class="blog index">
		<?php include "breadcrumbs.php" ?>
		<div id="left">
			<section id="latest-news"> <!-- Start #latest-news -->

				<?php $latest_news_show = 10; // How many latest news posts should be displayed?
					  $latest_news_post_ids = array();
					  $latest_news_query = new WP_Query(array('posts_per_page' => $latest_news_show, 'paged' => $paged)); ?>

				<?php if ($latest_news_query->have_posts()) : while ($latest_news_query->have_posts()) : $latest_news_query->the_post(); ?>

					<?php array_push($latest_news_post_ids, $post->ID); ?>

					<?php if($latest_news_query->current_post == 0 && !is_paged() ) { ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
							<div class="triangle"></div><i class="star fa fa-star"></i>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
								<div class="figure featured" style="background-image: url('<?php echo $image[0]; ?>');"></div>
							</a>
							<header class="entry-header">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<time datetime="<?php echo date(DATE_W3C); ?>" pubdate ><?php the_time('F jS, Y') ?></time>
								<span class="byline author vcard">
									<span>by </span><span class="fn"><?php the_author() ?></span> / <span class="category"><?php the_category(); ?> </span>
								</span>
								<?php
								$title = get_the_title();
								$url = get_permalink();
								include 'social.php';
								?>
							</header>
							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div>
						</article>
						<hr/>

					<?php } else { ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>

							<div class="article-left">
								<div class="triangle"></div><i class="star fa fa-star"></i>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
									<div class="figure" style="background-image: url('<?php echo $image[0]; ?>');"></div>
								</a>
							</div>
							<div class="article-right">
								<header class="entry-header">
									<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									<time datetime="<?php echo date(DATE_W3C); ?>" pubdate ><?php the_time('F jS, Y') ?></time>
									<span class="byline author vcard">
										<span>by </span><span class="fn"><?php the_author() ?></span> / <span class="category"><?php the_category(); ?> </span>
									</span>
									<?php
									$title = get_the_title();
									$url = get_permalink();
									include 'social.php';
									?>
								</header>
								<div class="entry-content">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</article>
						<hr/>


					<?php } ?>

				<?php endwhile; ?>


			<?php

			/* Pagination for WordPress http://codex.wordpress.org/Function_Reference/paginate_links */
			global $latest_news_query;
			$big = 999999999; // need an unlikely integer
			$args = array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $latest_news_query->max_num_pages
			)

			?>

			<div class="navigation"><?php echo paginate_links( $args ); ?></div>


			</section><!-- End #latest-news -->


			</div><!-- End #news-categories -->


			<?php else : ?> <!-- No Articles -->

				<h2>No articles posted yet! Come back soon.</h2>

			<?php endif; ?>

		</div>


<?php get_sidebar(); ?>
</section><!-- End #news -->
<?php get_footer(); ?>
