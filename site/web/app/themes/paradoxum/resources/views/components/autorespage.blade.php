@php
// Get the parent page ID based on its slug
$parent_page_slug = 'autores';
$parent_page = get_page_by_path($parent_page_slug);
$parent_page_id = $parent_page->ID;

// Get the sub-pages of the parent page
$sub_pages_args = array(
    'post_type' => 'page',
    'post_parent' => $parent_page_id,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1,
);
$sub_pages_query = new WP_Query($sub_pages_args);
@endphp

@if ($sub_pages_query->have_posts())
    <ul id="autores" class="no-underline grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-40">
        
    @while ($sub_pages_query->have_posts())
        @php $sub_pages_query->the_post() @endphp
        <li class="self-center justify-items-center text-center">
            <a href="{{ get_permalink() }}">
            @if (has_post_thumbnail())
            {{ the_post_thumbnail('thumbnail', array( 'class' => 'rounded-full w-full' ) ) }}
            @endif

            <h2 class="break-words mt-6 text-xl">{{ the_title() }}</h2>
            </a>
        </li>
    @endwhile

    </ul>
@endif
<?php wp_reset_postdata(); ?>
