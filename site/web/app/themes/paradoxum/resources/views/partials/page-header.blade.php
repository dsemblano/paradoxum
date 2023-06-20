@if ( (!wp_get_post_parent_id( get_the_ID() ) != 0) && (! is_front_page()) )
<div class="page-header mb-5">
  <h1>{!! $title !!}</h1>
</div>
@endif
