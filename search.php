<?php get_header(); ?>
<section id="news" class="blog">
	<?php include "breadcrumbs.php" ?>
	<?php if (have_posts()) : ?>

		<div id="left">
		<h1>Search Results</h1>

		<?php while (have_posts()) : the_post(); ?>

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

		<?php endwhile; ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
