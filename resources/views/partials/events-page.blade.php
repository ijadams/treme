<?php
/* FEATURED EVENTS LOOP*/
$query_vars = array(
  'post_type' => 'events',
  'posts_per_page'	=> -1,
  'meta_key'			=> 'date',
  'orderby'			=> 'meta_value_num',
  'order'				=> 'ASC'
);

query_posts($query_vars);
?>
<h1>Upcoming Events</h1>
<div class="row">
  <div class="columns large-12">
    <section class="events-holder">
      <?php
      if (have_posts()) : while (have_posts()) : the_post();
        // get raw date
        $date = get_field('date', false, false);
        // make date object
        $date = new DateTime($date);
        ?>
        <article class="single-event">
          <!-- date -->
          <div class="event-date">
            <div class="month">
              <?php echo $date->format('M'); ?>
            </div>
            <div class="day">
              <?php echo $date->format('j'); ?>
            </div>
          </div>
          <!-- image preview -->
          <?php if( get_field('image_preview') ): ?>
            <a href="<?php the_field('event_link'); ?>" class="event-image-link">
              <div class="event-image" style="background-image: url('<?php the_field('image_preview'); ?>');"></div>
            </a>
          <?php endif; ?>
          <!-- information -->
          <div class="event-info">
            <div class="title-date-container">
              <h2><?php echo get_field('event_title'); ?></h2>
              <?php if( get_field('event_start_time') ): ?>
                <div class="event-time">
                  <span><?php echo get_field('event_start_time'); ?> - <?php echo get_field('event_end_time'); ?></span>
                </div>
              <?php endif; ?>
            </div>
            <div class="event-desc">
              <p><?php echo get_field('event_description'); ?></p>
            </div>
            <?php if( get_field('event_link') ): ?>
              <div class="event-button">
                <a href="<?php the_field('event_link'); ?>" class="button">Learn More</a>
              </div>
            <?php endif; ?>
          </div>
        </article>
      <?php    endwhile; else : endif; wp_reset_query(); ?>
    </section>

</div>



