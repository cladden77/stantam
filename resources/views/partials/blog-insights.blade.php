{{-- <style>
    .slick-slide {
        margin: 0 26px;
    }
    .slick-list {
        margin: 0 -26px;
    }
</style> --}}
@group('blog_insights')
<div class="container blog-insights">
        @hassub('recent_post_header')
        <div class="row justify-content-center py-5">
            <div class="col-12 text-center">
                <h2>@sub('recent_post_header')</h2>
            </div>
        </div>
        @endsub
<div class="row justify-content-between">
    <?php $the_query = new WP_Query( 'posts_per_page=6' ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    <div class="col-lg-4">
      <div class="card mb-2">
        <img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
        <div class="card-body">
          <a href="<?php the_permalink() ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
          <p class="card-text"><?php
            the_excerpt(__('(more…)')); ?></p>
          <a href="<?php the_permalink() ?>">Read more</a>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>
      <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
    </p>
    <?php endif; ?>
  </div>
</div>
@endgroup