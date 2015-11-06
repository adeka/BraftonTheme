<?php get_header(); ?>
	<section id="news" class="blog">
		<?php include "breadcrumbs.php" ?>
		<div id="left">
			<section id="latest-news"> <!-- Start #latest-news -->

				<?php $latest_news_show = 3; // How many latest news posts should be displayed?
					  $latest_news_post_ids = array();
					  $latest_news_query = new WP_Query(array('posts_per_page' => $latest_news_show)); ?>

				<?php if ($latest_news_query->have_posts()) : while ($latest_news_query->have_posts()) : $latest_news_query->the_post(); ?>

					<?php array_push($latest_news_post_ids, $post->ID); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
						<div class="triangle"></div><i class="star fa fa-star"></i>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php echo get_the_post_thumbnail(get_the_ID(), 'latest-news-thumb'); ?></a>
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

				<?php endwhile; ?>

			</section><!-- End #latest-news -->

			<?php $categories = get_categories();
				$category_post_show = 2; // How many posts should be displayed in each category?
			?>
				<!-- Start #news-categories -->
				<div id="news-categories">

				<!-- Start #news-category -->
				<?php foreach($categories as $category) :

					$news_cat_query = new WP_Query(array('cat' => $category->cat_ID, 'post__not_in' => $latest_news_post_ids, 'posts_per_page' => $category_post_show));
						if ($news_cat_query->have_posts()) : ?>

							<div class="news-category" id="category-<?php echo $category->cat_ID; ?>">
								<h3 class="category-title"><a href="<?php echo get_category_link($category->cat_ID)?>" title="Category <?php echo $category->cat_name; ?>"><?php echo $category->cat_name; ?></a></h3>
									<?php while ($news_cat_query->have_posts()) : $news_cat_query->the_post(); ?>
										<?php array_push($latest_news_post_ids, $post->ID); ?>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<header class="entry-header">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_post_thumbnail('news-category-thumb'); ?></a>
												<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
												<div class="entry-meta">
													<time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
													<span class="byline author vcard">
														<span>by </span><span class="fn"><?php the_author() ?></span>
													</span>
													<br>
													<span class="category"><?php the_category(); ?> </span>
													<br>
													<?php
													$title = get_the_title();
													$url = get_permalink();
													include 'social.php';
													?>
												</div><!-- .entry-meta -->
											</header><!-- .entry-header -->

											<div class="entry-summary">
												<?php the_excerpt(); ?>
											</div><!-- .entry-summary -->

										</article><!-- #post-<?php the_ID(); ?> -->
										<hr/>
									<?php endwhile;  // Reset Post Data ?>

							</div>

						<?php endif; ?>

				<?php endforeach; ?><!-- End #news-category -->

			</div><!-- End #news-categories -->


			<?php else : ?> <!-- No Articles -->

				<h2>No articles posted yet! Come back soon.</h2>

			<?php endif; ?>

		</div>


<?php get_sidebar(); ?>
</section><!-- End #news -->
<?php get_footer(); ?>
