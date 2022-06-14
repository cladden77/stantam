
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
            <div class="col">
                <ul>
  
                    <?php
                    // Define our WP Query Parameters
                    $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                      
                    <?php
                    // Start our WP Query
                    while ($the_query -> have_posts()) : $the_query -> the_post();
                    // Display the Post Title with Hyperlink
                    ?>
                      
                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                      
                    <li><?php
                    // Display the Post Excerpt
                    the_excerpt(__('(more…)')); ?></li>
                      
                    <?php
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    </ul>
            </div>
        </div>
    </div>
</section>