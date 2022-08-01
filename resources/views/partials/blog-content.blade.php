<section class="blog">
    <div class="container">
        <div class="row">
            <div class="featured-post">
                <?php $the_query = new WP_Query(array(
                    'category_name' => 'featured',
                    'posts_per_page' => 1,)
                    ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
            <div class="col-12 card-group">
              <div class="card mb-2">
                <div class="featured-img-wrapper">
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

        <div class="row justify-content-center my-5">
            <div class="col-12 col-sm-12 col-md-6 mb-5 mb-sm-5 mb-md-0">
                <div class="most-popular-posts">
                    <div class="card">
                        <div class="card-header">
                          <i>Most Popular</i>
                        </div>
                        <div class="list-wrap">
                        <?php $the_query = new WP_Query(array(
                            'category_name' => 'popular',
                            'posts_per_page' => 4,)
                            ); ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="<?php the_permalink() ?>"><p class="most-popular-card-title"><?php the_title(); ?></p></a>
                                <p class="byline author vcard">
                                    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
                                    {{ get_the_author() }}
                                    </a> | <time datetime="{{ get_post_time('c', true) }}">Published: {{ get_the_date() }}</time>
                                </p>
                            </li>
                        </ul>
                        
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                        <p class="p-5">
                          <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="editor-picks">
                    <div class="card">
                        <div class="card-header">
                          <i>Editor's Picks</i>
                        </div>
                        <div class="list-wrap">
                            <?php $the_query = new WP_Query(array(
                                'category_name' => 'editor-pick',
                                'posts_per_page' => 4,)); ?>
                            <?php if ( $the_query->have_posts() ) : ?>
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="<?php the_permalink() ?>"><p class="most-popular-card-title"><?php the_title(); ?></p></a>
                                    <p class="byline author vcard">
                                        <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
                                        {{ get_the_author() }}
                                        </a> | <time datetime="{{ get_post_time('c', true) }}">Published: {{ get_the_date() }}</time>
                                    </p>
                                </li>
                            </ul>
                            
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                            <p class="p-5">
                              <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                            </p>
                            <?php endif; ?>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>