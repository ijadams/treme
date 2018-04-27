<?php
/* FEATURED EVENTS LOOP*/
$query_vars = array(
  'post_type' => 'weekly_events',
  'posts_per_page'	=> -1,
  'orderby'			=> 'meta_value_num',
  'order'				=> 'ASC'
);

query_posts($query_vars);
?>
<h1>Weekly Events</h1>
<div class="row">
  <div class="columns large-12">
    <section class="events-holder weekly">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="single-event">
          <div class="event-date">
            <div class="month">
              Every <?php echo get_field('day'); ?>
            </div>
          </div>
          <!-- image preview -->
          <?php if( get_field('image_preview') ): ?>
            <a href="<?php the_field('event_link'); ?>" class="event-image-link">
              <img src="<?php the_field('image_preview'); ?>" style="width: 100%;">
            </a>
          <?php endif; ?>
        </article>
      <?php    endwhile; else : endif; wp_reset_query(); ?>
    </section>

  </div>



