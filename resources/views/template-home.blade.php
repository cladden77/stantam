{{--
  Template Name: Home Page Template
--}}

@extends('layouts.frontpage')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
    @include('partials.footer')
  @endwhile
@endsection
