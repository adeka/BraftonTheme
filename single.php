<?php get_header(); ?>
<section id="news" class="single">
	<?php include "breadcrumbs.php" ?>
	<div id="left">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="triangle"></div><i class="star fa fa-star"></i>

			<div class="entry-content">
				<div class="vertical">
				<?php
				$title = get_the_title();
				$url = get_permalink();
				include 'social.php';
				?>
				</div>
				<!--video embed code-->
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="figure" style="background-image: url('<?php echo $image[0]; ?>');">
				<div class="caption"><?php the_post_thumbnail_caption(); ?></div>
				</div>
				<!--
				<div class="figure"><?php echo the_post_thumbnail(get_the_ID(), 'news-category-thumb'); ?></div>
				<?php if (!get_post_meta( get_the_ID(), 'brafton_video', true )): ?>
					<div class="figure"><?php echo the_post_thumbnail(get_the_ID(), 'news-category-thumb'); ?>
					</div>
				<?php else: ?>
     			<?php echo get_post_meta( get_the_ID(), 'brafton_video', true ) ?>
				<?php endif; ?>
				-->

				<header class="entry-header">
					<div class="bigDate">
						<div class="day"><?php the_modified_date('j\<\s\u\p\>S\<\/\s\u\p\>'); ?></div>
						<div class="month"><?php the_modified_date('F'); ?></div>
						<div class="year"><?php the_modified_date('Y'); ?></div>
					</div>

					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="meta">
						<!--
						<time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
						<span class="byline author vcard">
							<span>by </span><span class="fn"><?php the_author() ?></span>
						</span> /
						-->
						<?php the_category(); ?>
					</div>
				</header>

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>

		</article>

	<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
