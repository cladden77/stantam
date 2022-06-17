{{--
  Template Name: General Page Template
--}}

@extends('layouts.generalpage')

@section('general_content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    @include('partials.footer')
  @endwhile
@endsection
