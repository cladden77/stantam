@group('form_section')
<div class="form-section py-5">
    <div class="container-fluid px-5">
        <div class="row align-items-center justify-content-center px-5">
            <div class="col-12 col-md-6 col-sm-12 text-center py-3 py-md-auto">
                <img src="@sub('image_form_left', 'url')" alt="@sub('image_form_left', 'alt')">
            </div>
            <div class="col-12 col-md-6 col-sm-12 text-center text-md-left">
                @hassub('form_title')
                <h2>@sub('form_title')</h2>
                @endsub

                @hassub('form_text')
                <p>@sub('form_text')</p>
                @endsub

                @hassub('form_shortcode')
                @sub('form_shortcode')
                @endsub
            </div>
        </div>
    </div>
</div>
@endgroup
@group('connect')
<div class="connect">
    <div class="container">
        <div class="row justify-content-center px-5">
            <div class="col-12 text-center py-3">
                @hassub('section_2_title')
                <h2>@sub('section_2_title')</h2>
                @endsub
            </div>
        </div>

        <div class="row justify-content-center pb-3">
            <div class="col-12 text-center">
                <div class="d-inline-flex align-items-center">
                    @hassub('working_time')
                <p>@sub('working_time')</p>
                @endsub
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="d-inline-flex align-items-start">
                    @hassub('phone_icon')
                    <img src="@sub('phone_icon', 'url')" alt="@sub('phone_icon', 'alt')">
                    @endsub
                    @hassub('phone_text')
                    <p>@sub('phone_text')</p>
                    @endsub
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="d-inline-flex align-items-center">
                    @hassub('email_icon')
                    <img src="@sub('email_icon', 'url')" alt="@sub('email_icon', 'alt')">
                    @endsub
                    @hassub('email_text')
                    <p>@sub('email_text')</p>
                    @endsub
                </div>
            </div>
        </div>
            
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="d-inline-flex align-items-center">
                    @hassub('address_icon')
                    <img src="@sub('address_icon', 'url')" alt="@sub('address_icon', 'alt')">
                    @endsub
                    @hassub('address_text')
                    <p>@sub('address_text')</p>
                    @endsub
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                <div class="d-inline-flex align-items-center">
                    @hassub('follow_text')
                    <p class="pr-3">@sub('follow_text')</p>
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
        </div>
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
                <div>
                <div class="review mx-3">
                    @hassub('logo')
                    <img src="@sub('logo', 'url')" alt="@field('logo', 'alt')">
                    @endsub
                    <p>@sub('review_text')</p>
                    <p class="name">@sub('review_name')</p>
                </div>
            </div>
                @endfields
            
            </div>
        </div>
    </div>
</div>
@endgroup
</div>