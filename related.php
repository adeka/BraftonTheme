<?php //Call Related Posts

				if ( is_singular() ) { ?>



			      <?php $orig_post = $post;

			        global $post;

			        $categories = get_the_category($post->ID);

			        if ($categories) {

			        $category_ids = array();

			        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

			        $args=array(

			        'category__in' => $category_ids,

			        'post__not_in' => array($post->ID),

			        'posts_per_page'=> 8, // Number of related posts that will be shown.

			        'caller_get_posts'=>1

			        );

			        $my_query = new wp_query( $args );

			        if( $my_query->have_posts() ) {

			        echo '<div class="relatedposts"><h3 class="widgettitle">Related Articles</h3>';

			        while( $my_query->have_posts() ) {

			        $my_query->the_post();?>



			                  <div class="relatedpost">

			                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

			                    <div class="relatedpostimg">

			                        <?php

			                            if ( has_post_thumbnail()) {

			                                echo get_the_post_thumbnail(get_the_ID(), 'latest-news-thumb');

			                              }

			                            else {

			                                echo '';

			                            }

			                        ?>

			                    </div>



			                  <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

			                      <?php if (strlen($post->post_title) > 50) {

			                      echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; } else {

			                      the_title();

			                      } ?>

			                  </h5>



			                  <span class="tiny"><?php the_date('l, F j'); ?></span><br />



			                  </a></div>

			        <?php

			        }

			        echo '</div>';

			        }

			        }

			        $post = $orig_post;

			        wp_reset_query(); ?>



		<?php //end Related Posts

		} ?>
