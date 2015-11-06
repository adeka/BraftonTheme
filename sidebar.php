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
      <!-- Begin Facebook Like Box -->
      <aside id="fb-like-box" class="widget">
          <h2 class="widget-title">Facebook</h2>
              <div class="fb-like-box-wrapper">
                  <!-- Get client iframe from facebook and set width to 295px -->
                  <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FContentLEAD&amp;width=295&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23FFF&amp;stream=false&amp;header=false&amp;appId=182104188561393" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:295px; height:258px;" allowTransparency="true"></iframe>
              </div>
      </aside> <!--End Facebook Like Box -->
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
