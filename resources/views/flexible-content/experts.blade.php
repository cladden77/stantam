<section class="experts my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center py-5 pl-5">
                @hassub('header')
                <h2 class="pb-3">@sub('header')</h2>
                @endsub
                @hassub('subheader')
                <h3 class="pb-3">@sub('subheader')</h3>
                @endsub
            </div>
        </div>

        <div class="row row-cols-5 justify-content-center">
            @fields('experts_repeater')
            <div class="col">
                <div class="experts_photo">
                      <img src="@sub('expert_image', 'url')">
                </div>
                <div class="overlay content">
                    @hassub('expert_name')
                    <div class="name">
                        <p>
                            @sub('expert_name')
                        </p>
                    </div>
                    @endsub
                    @hassub('expert_title')
                    <div class="position">
                        <p>@sub('expert_title')</p>
                    </div>
                    @endsub
                    @hassub('linkedin_url')
                    <div class="social-link">
                        <p>
                            <a href="@sub('linkedin_url')"><img alt="LinkedIn logo" src="" /></a>
                        </p>
                    </div>
                    @endsub
                </div>
            </div>
            @endfields
          </div>
        </div>
    </div>
</section>