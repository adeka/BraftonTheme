<div id="sidebar">
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : ?>
	<?php endif; ?>
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
  			        'posts_per_page'=> 3, // Number of related posts that will be shown.
  			        'caller_get_posts'=>1
  			        );
  			        $my_query = new wp_query( $args );
  			        if( $my_query->have_posts() ) {
  			        echo '<div class="relatedposts"><h2 class="widgettitle">Related Articles</h2>';
  			        while( $my_query->have_posts() ) {
  			        $my_query->the_post();?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
  			                  <div class="relatedPost">
                          <div class="top">

                          </div>
                          <div class="middle">
                            <div class="frame"></div>
                            <h3 class="title">
                                <?php the_title();?>
                            </h3>
  			                    <div class="relatedImage">
  			                        <?php
  			                            if ( has_post_thumbnail()) {
  			                                echo get_the_post_thumbnail(get_the_ID(), 'latest-news-thumb');
  			                              }
  			                            else {
  			                                echo '';
  			                            }
  			                        ?>
  			                    </div>
                          </div>
                            <div class="bottom">
                          <i class="fa fa-calendar"></i> <time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
  			                  </div>
                        </div>
                        </a>
  			        <?php
  			        }
  			        echo '</div>';
  			        }
  			        }
  			        $post = $orig_post;
  			        wp_reset_query(); ?>
  		<?php //end Related Posts
  		} ?>
</div>


<script>
$(function() {
var Accordion = function(el, multiple) {
  this.el = el || {};
  this.multiple = multiple || false;
  // Variables privadas
  var links = this.el.find('.widget-title');
  // Evento
  links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
}

Accordion.prototype.dropdown = function(e) {
  var $el = e.data.el;
    $this = $(this),
    $next = $this.next();

  $next.slideToggle();
  $this.parent().toggleClass('open');

  if (!e.data.multiple) {
    $el.find('.widget ul').not($next).slideUp().parent().removeClass('open');
  };
}

var accordion = new Accordion($('#sidebar .widget'), false);
$('#sidebar .widget ul').hide();

});
</script>
