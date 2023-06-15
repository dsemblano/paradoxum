@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  @if ( !wp_get_post_parent_id( get_the_ID() ) != 0 )
  @include('partials.page-header')
  @endif
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
