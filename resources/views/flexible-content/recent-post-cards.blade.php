
<section class="recent-post-cards py-5">
    <div class="container">
        @hassub('recent_post_header')
        <div class="row justify-content-center pb-5">
            <div class="col-10 text-center">
                <h2>@sub('recent_post_header')</h2>
            </div>
        </div>
        @endsub
        <div class="row">
            <?php $the_query = new WP_Query( 'posts_per_page=6' ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="col-lg-4 card-group">
              <div class="card mb-2">
                <div class="img-wrapper">
                  <img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
                </div>
                <div class="card-body">
                  <a href="<?php the_permalink() ?>"><h3 class="card-title"><?php the_title(); ?></h3></a>
                  <p class="card-text"><?php
                    the_excerpt(__('(more…)')); ?></p>
                </div>
                <div class="card-footer bg-white">
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
    </div>
</section>