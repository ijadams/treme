<div class="row">
  <div class="columns large-6">
    @php(the_content())
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </div>
  <div class="columns large-6">
    @php(the_post_thumbnail())
  </div>
</div>
