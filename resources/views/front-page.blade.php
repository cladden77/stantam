@extends('layouts.frontPage')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <?php if( have_rows('hp_flexible_content') ): ?>
  <?php while( have_rows('hp_flexible_content') ): the_row(); ?>
      <?php if( get_row_layout() == 'home_page_hero' ): ?>
          @include('flexible-content.hp-hero')
      <?php endif; ?>
       <?php if( get_row_layout() == 'one_col' ): ?>
          @include('flexible-content.one-col')
      <?php endif; ?>
      <?php if( get_row_layout() == 'three_col' ): ?>
          @include('flexible-content.three-col')
      <?php endif; ?>
      <?php if( get_row_layout() == 'listings' ): ?>
          @include('flexible-content.listings')
      <?php endif; ?>
      <?php if( get_row_layout() == 'contact' ): ?>
      @include('flexible-content.contact')
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

  @endwhile
@endsection
