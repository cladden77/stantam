<div class="header" style="background-image:url(@field('header_background_image', 'url'))">
    <h2>@title</h2>
    <p>@content</p>
</div>
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
        @hassub('phone_icon', url)
        <img src="@sub('phone_icon', 'url')" alt="@sub('phone_icon', 'alt')">
        @endsub
        @hassub('phone_text')
        <p>@sub('phone_text')</p>
        @endsub
    </div>
    <div>
        @hassub('email_icon', url)
        <img src="@sub('email_icon', 'url')" alt="@sub('email_icon', 'alt')">
        @endsub
        @hassub('email_text')
        <p>@sub('email_text')</p>
        @endsub
    </div>
    <div>
        @hassub('address_icon', url)
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
        @hassub('linkedin_icon', url)
        <a href="@sub('linkedin_profile')">
            <img src="@sub('linkedin_icon', 'url')" alt="@sub('linkedin_icon', 'alt')">
        </a>
        @endsub
        @hassub('facebook_icon', url)
        <a href="@field('facebook_profile')">
            <img src="@sub('facebook_icon', 'url')" alt="@sub('facebook_icon', 'alt')">
        </a>
        @endsub
        @hassub('twitter_icon', url)
        <a href="@sub('twitter_profile')">
            <img src="@sub('twitter_icon', 'url')" alt="@sub('twitter_icon', 'alt')">
        </a>
        @endsub
    </div>
</div>
@endgroup
@hasfield('map_img', url)
<div>
    <img src="@field('map_img', 'url')" alt="@field('map_img', 'alt')">
</div>
@endfield
@group('reviews')
<div>
    <div>
        <h2>@sub('title')</h2>
        <div>
            <span>@sub('button_text')</span>
            <a href="@sub('button_url')"></a>
        </div>
    </div>
    <div id="slider">
        @fields('review_repeat')
        <div>
            <img src="@sub('logo', 'url')" alt="@field('logo', 'alt')">
            <p>@sub('review_text')</p>
            <p>@sub('review_name')</p>
        </div>
        @endfields
    </div>
</div>
@endgroup
