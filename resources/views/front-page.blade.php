@extends('layouts.frontPage')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <?php if( have_rows('hp_flexible_content') ): ?>
  <?php while( have_rows('hp_flexible_content') ): the_row(); ?>
      <?php if( get_row_layout() == 'home_page_hero' ): ?>
          @include('flexible-content.hp-hero')
      <?php endif; ?>
      <?php if( get_row_layout() == 'three_col' ): ?>
          @include('flexible-content.three-col')
      <?php endif; ?>
      <?php if( get_row_layout() == 'info_slider' ): ?>
          @include('flexible-content.info-slider')
      <?php endif; ?>
      <?php if( get_row_layout() == 'satisfaction_block' ): ?>
          @include('flexible-content.satisfaction')
      <?php endif; ?>
      <?php if( get_row_layout() == 'full_width_cta' ): ?>
      @include('flexible-content.full-width-cta')
      <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

  @endwhile
@endsection
