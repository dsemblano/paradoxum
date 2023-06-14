@if (have_rows('autor'))
    @while (have_rows('autor'))
        @php the_row() @endphp

        <div {{ $attributes }}>
            <span>{{ the_field('autor') }}</span>
        </div>
                
    @endwhile
@endif