<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


@group('blog_insights')
<div class="blog_insights">
    <div class="container">
        <h2>@sub('title')</h2>
        <div class="blog_posts">
            @fields('blog-reapeater')
            <div class="blog_post">
                <?php
                $blog_1 = get_sub_field('blogpost');
                $img_1 = get_the_post_thumbnail_url($blog_1->ID, 'large');
                $categpory_1 = wp_get_post_categories($blog_1->ID);
                $cats = array();
                $cats_urls = array();
                foreach ($categpory_1 as $cat) {
                    $c = get_category($cat);
                    array_push($cats, $c->name);
                    array_push($cats_urls, get_category_link($c));
                }
                ?>
                <img src="<?php echo $img_1; ?>">
                <h4><?php echo esc_html($blog_1->post_title); ?></h4>
                <span class="category"><?php for ($i = 0; $i <= (count($cats) - 1); $i++) {
                                        ?><a href="<?php echo $cats_urls[$i] ?>">
                            <?php echo $cats[$i]; ?>
                        </a>
                        <?php if ($i != (count($cats)) - 1) {
                        ?>
                            ,
                    <?php
                                            }
                                        } ?></span>
                <p><?php echo apply_filters('the_excerpt', $blog_1->post_content); ?></p>
                <a href="<?php echo get_permalink($blog_1->ID); ?>" class="readmore">Read More</a>
            </div>
            @endfields
        </div>
    </div>
</div>
@endgroup
<script>
    /*
    $('.blog_posts').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});*/
</script>