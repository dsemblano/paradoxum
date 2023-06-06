@if (have_rows('ficha_tecnica'))
    @while (have_rows('ficha_tecnica'))
        @php the_row() @endphp

        <div {{ $attributes }}>
            <span>{{ the_sub_field('autor') }}</span>
        </div>
                
    @endwhile
@endif