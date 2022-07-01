{{--
  Template Name: Services Page Template
--}}

@extends('layouts.services')

@section('services_content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.services')
    @include('partials.footer')
  @endwhile
@endsection
