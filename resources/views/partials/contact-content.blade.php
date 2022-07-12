@group('form_section')

<div class="form-section">
    <div>
        <img src="@sub('image_form_left', 'url')" alt="@sub('image_form_left', 'alt')">
    </div>
    <div>
        <div>
            @hassub('form_title')
            <h2>@sub('form_title')</h2>
            @endsub
            @hassub('form_text')
            <p>@sub('form_text')</p>
            @endsub
        </div>
        <div>
            <?php echo do_shortcode(get_sub_field('form_shortcode')); ?>
        </div>
    </div>
</div>
@endgroup
@group('connect')
<div class="connect">
    @hassub('section_2_title')
    <h2>@sub('section_2_title')</h2>
    @endsub
    @hassub('working_time')
    <p>@sub('working_time')</p>
    @endsub
    <div>
        @hassub('phone_icon')
        <img src="@sub('phone_icon', 'url')" alt="@sub('phone_icon', 'alt')">
        @endsub
        @hassub('phone_text')
        <p>@sub('phone_text')</p>
        @endsub
    </div>
    <div>
        @hassub('email_icon')
        <img src="@sub('email_icon', 'url')" alt="@sub('email_icon', 'alt')">
        @endsub
        @hassub('email_text')
        <p>@sub('email_text')</p>
        @endsub
    </div>
    <div>
        @hassub('address_icon')
        <img src="@sub('address_icon', 'url')" alt="@sub('address_icon', 'alt')">
        @endsub
        @hassub('address_text')
        <p>@sub('address_text')</p>
        @endsub
    </div>
    <div>
        @hassub('follow_text')
        <p>@sub('follow_text')</p>
        @endsub
        @hassub('linkedin_icon')
        <a href="@sub('linkedin_profile')">
            <img src="@sub('linkedin_icon', 'url')" alt="@sub('linkedin_icon', 'alt')">
        </a>
        @endsub
        @hassub('facebook_icon')
        <a href="@field('facebook_profile')">
            <img src="@sub('facebook_icon', 'url')" alt="@sub('facebook_icon', 'alt')">
        </a>
        @endsub
        @hassub('twitter_icon')
        <a href="@sub('twitter_profile')">
            <img src="@sub('twitter_icon', 'url')" alt="@sub('twitter_icon', 'alt')">
        </a>
        @endsub
    </div>
</div>
@endgroup
@hasfield('map_img')
<div>
    <img src="@field('map_img', 'url')" alt="@field('map_img', 'alt')">
</div>
@endfield
@group('reviews')
<div class="reviews container-fluid">
    <div class="row">
        <div class="title col-4">
            <h2>@sub('title')</h2>
                <a class="button button--outline-white" href="@sub('button', 'url')">@sub('button', 'title')</a>
        </div>
        <div class="col-8">
            <div class="review_slider">
                @fields('review_repeat')
                <div class="review">
                    @hassub('logo')
                    <img src="@sub('logo', 'url')" alt="@field('logo', 'alt')">
                    @endsub
                    <p>@sub('review_text')</p>
                    <p class="name">@sub('review_name')</p>
                </div>
                @endfields
            </div>
        </div>
    </div>
</div>
@endgroup
</div>