<section class="services-hero py-5" style="@issub('section_background_color', 'blue')background: rgba(0, 122, 193, 0.8); background: linear-gradient(0deg, rgba(0,122,193,0.8) 0%, rgba(0,122,193,0.8) 100%), url('@sub('services_bg_image')') center center/cover no-repeat;@endsub
@issub('section_background_color', 'gray')background: rgba(90,98,101, 0.8); background: linear-gradient(0deg, rgba(90,98,101,0.8) 0%, rgba(90,98,101,1) 100%), url('@sub('services_bg_image')') center center/cover no-repeat;@endsub
@issub('section_background_color', 'green')background: rgba(121,132,69, 0.8); background: linear-gradient(0deg, rgba(121,132,69,0.8) 0%, rgba(121,132,69,0.8) 100%), url('@sub('services_bg_image')') center center/cover no-repeat;@endsub">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-6 col-md-12 text-center text-lg-left text-md-center">
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
                <div class="py-3 px-3 text-center">
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