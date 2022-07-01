<section class="services-hero services-hero--@sub('section_background_color') py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6 col-md-12 text-center text-md-center">
                @hassub('header')
                <h1>@sub('header')</h1>
                @endsub
                @hassub('subheader')
                <h2 class="pb-3 pt-1">@sub('subheader')</h2>
                @endsub
                @hassub('content')
                <p>@sub('content')</p>
                @endsub
                @hassub('cta_arrow')
                <div class="cta-arrow">
                <p>@sub('cta_arrow')</p>
                </div>
                @endsub
            </div>
            <div class="col-12 offset-0 offset-lg-1 offset-md-0 col-lg-5 col-md-12 services-hero__form-wrapper">
                <div class="py-3 px-3 text-center text-md-center">
                    @hassub('form_header')
                    <h3>@sub('form_header')</h3>
                    @endsub
                    @hassub('form_subheader')
                    <p class="mb-0">@sub('form_subheader')</p>
                    @endsub
                    @hassub('form')
                    @sub('form')
                    @endsub
                </div>
            </div>
        </div>
    </div>
</section>