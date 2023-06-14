
@if ( have_rows('ficha_tecnica') )
    @while (have_rows('ficha_tecnica'))
        @php the_row() @endphp

    {{-- <h2>Ficha Técnica</h2> --}}
        <table {{ $attributes }}>
            <thead>
                <tr>
                    <th colspan="2" class="title-main text-3xl">Ficha Técnica</th>
                </tr>
            </thead>
            <tbody>
                {{-- Autor --}}
                @if (get_field('autor'))
                <tr>
                    <th>Autor: </th>
                    <td>
                        <a href="/autores/{{ strtolower(str_replace(' ', '', iconv('UTF-8', 'ASCII//TRANSLIT', get_field('autor')))) }}">
                            {{ the_field('autor') }}
                        </a>
                    </td>
                </tr>
                @endif

                {{-- Genero --}}
                @if (get_sub_field('genero'))
                <tr>
                    <th>{{ get_sub_field_object('genero')['label'] }}</th>
                    <td>{{ implode( ', ', get_sub_field('genero') ) }}</td>
                </tr>
                @endif

                {{-- Lançamento --}}
                @if (get_sub_field('lancamento'))
                    @php
                        $dateString = get_sub_field('lancamento');
                        $date = DateTime::createFromFormat('d/m/Y', $dateString);
                        $month = $date->format('m');
                        $year = $date->format('Y');
                        $formatter = new IntlDateFormatter('pt_PT', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
                        $formatter->setPattern('MMMM Y');
                        $monthYear = ucfirst($formatter->format($date));    
                    @endphp
                    <tr>
                        <th>{{ get_sub_field_object('lancamento')['label'] }}</th>
                        <td>{{ $monthYear }}</td>
                    </tr>
                @endif

                {{-- segunda edição lançamento --}}
                @if (get_sub_field('lancamento_segunda_edicao'))
                    @php
                        $dateString = get_sub_field('lancamento_segunda_edicao');
                        $date = DateTime::createFromFormat('d/m/Y', $dateString);
                        $month = $date->format('m');
                        $year = $date->format('Y');
                        $formatter = new IntlDateFormatter('pt_PT', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
                        $formatter->setPattern('MMMM Y');
                        $monthYear = ucfirst($formatter->format($date));    
                    @endphp
                    <tr>
                        <th>{{ get_sub_field_object('lancamento_segunda_edicao')['label'] }}</th>
                        <td>{{ $monthYear }}</td>
                    </tr>
                @endif
                
                {{-- Paginas --}}
                @if (get_sub_field('paginas'))
                <tr>
                    <th>{{ get_sub_field_object('paginas')['label'] }}</th>
                    <td>{{ the_sub_field('paginas') }}</td>
                </tr>
                @endif

                {{-- tamanho_ebook --}}
                @if (get_sub_field('tamanho_ebook'))
                <tr>
                    <th>{{ get_sub_field_object('tamanho_ebook')['label'] }}</th>
                    <td>{{ the_sub_field('tamanho_ebook') }} MB</td>
                </tr>
                @endif

                {{-- isbn_livro_impresso --}}
                @if (get_sub_field('isbn_livro_impresso'))
                <tr>
                    <th>{{ get_sub_field_object('isbn_livro_impresso')['label'] }}</th>
                    <td>{{ the_sub_field('isbn_livro_impresso') }}</td>
                </tr>
                @endif

                {{-- isbn_ebook --}}
                @if (get_sub_field('isbn_ebook'))
                <tr>
                    <th>{{ get_sub_field_object('isbn_ebook')['label'] }}</th>
                    <td>{{ the_sub_field('isbn_ebook') }}</td>
                </tr>
                @endif

                {{-- preco_livro_impresso --}}
                @if (get_sub_field('preco_livro_impresso'))
                <tr>
                    <th>{{ get_sub_field_object('preco_livro_impresso')['label'] }}</th>
                    <td>{{ the_sub_field('preco_livro_impresso') }}</td>
                </tr>
                @endif

                {{-- preco_ebook --}}
                @if (get_sub_field('preco_ebook'))
                <tr>
                    <th>{{ get_sub_field_object('preco_ebook')['label'] }}</th>
                    <td>{{ the_sub_field('preco_ebook') }}</td>
                </tr>
                @endif

                {{-- asin_print --}}
                @if (get_sub_field('asin_print'))
                <tr>
                    <th>{{ get_sub_field_object('asin_print')['label'] }}</th>
                    <td>{{ the_sub_field('asin_print') }}</td>
                </tr>
                @endif

                {{-- asin_ebook --}}
                @if (get_sub_field('asin_ebook'))
                <tr>
                    <th>{{ get_sub_field_object('asin_ebook')['label'] }}</th>
                    <td>{{ the_sub_field('asin_ebook') }}</td>
                </tr>
                @endif

            </tbody>
        </table>
        
    @endwhile
@endif
