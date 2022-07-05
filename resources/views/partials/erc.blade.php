<div class="title container">
        <h1>@title</h1>
        <span>Published: @published | Author:
            <?php $author_id = $post->post_author;
            ?><a href="<?php echo get_author_posts_url($author_id); ?>">
                <?php echo get_author_name($author_id); ?>
            </a>
        </span>
    </div>

    <div class="content row">
        <div class="px-5 col-12 col-md-3 col-sm-12">
            <p><strong>Topics in this article:</strong></p>
            @fields('erc_content_first')
            <div class="topic_list">
                <a href="#@sub('topic_title')">@sub('topic_title')</a>
            </div>
            @endfields
            @fields('erc_content_second')
            <div class="topic_list">
                <a href="#@sub('topic_title')">@sub('topic_title')</a>
            </div>
            @endfields
        </div>
        <div class="col-12 col-md-9 col-sm-12">
            @fields('erc_content_first')
            <div class="topic col-12 col-md-8 col-sm-12" @hassub('topic_title')id="@sub('topic_title')" @endsub>
                <h2>@sub('topic_title')</h2>
                <p>@sub('topic_content')</p>
            </div>
            @endfields
            @group('banner')
            <div class="banner" style="background-image:url(@sub('background_image', 'url')); background-size: cover;">
                <h3>@sub('cta_text')</h3>
                <div class="btn">
                    <span>@sub('btn_text')</span>
                    <a href="@sub('btn_url')"></a>
                </div>
            </div>
            @endgroup

            @fields('erc_content_second')
            <div class="topic col-12 col-md-8 col-sm-12" @hassub('topic_title')id="@sub('topic_title')" @endsub>
                <h2>@sub('topic_title')</h2>
                <p>@sub('topic_content')</p>
            </div>
            @endfields

        </div>



    </div>
    @hasfields('contact_form')
    @group('contact_form')
    <div class="contact_form">
        <div class="container">
            <h2>@sub('form_title')</h2>
            <div class="form px-5 pt-5">
                <?php echo do_shortcode(get_sub_field('form_shortcode')); ?>
            </div>
        </div>
    </div>
    @endgroup
    @endhasfields
    @hasfields('newsletter_form')
    @group('newsletter_form')
    <div class="newsletter_form">
        <div class="container">
            <div class="px-5">
            <div class="px-5">
                <h2>@sub('form_title')</h2>
            </div>
                <div class="form">
                    <?php echo do_shortcode(get_sub_field('form_shortcode')); ?>
                </div>
            </div>
        </div>
    </div>
    @endgroup
    @endhasfields