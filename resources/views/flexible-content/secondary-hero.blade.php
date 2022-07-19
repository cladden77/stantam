{{-- Secondary Hero blade --}}

<section class="secondary-hero container-fluid d-flex pt-5" style="background: url('@sub('hero_image')') center center/cover no-repeat;">
    <div class="row align-items-center pl-0 pl-lg-5 pl-md-0 my-auto secondary-hero__content-wrapper">
        <div class="text-center text-md-left text-sm-center px-5 py-5">
            @hassub('hero_header')
            <h1 class="animate__animated animate__fadeInLeft">@sub('hero_header')</h1>
            @endsub
            @hassub('hero_subheader')
            <h2 class="animate__animated animate__fadeInLeft">@sub('hero_subheader')</h2>
            @endsub
            @hassub('hero_content')
            <p class="animate__animated animate__fadeInLeft">@sub('hero_content')</p>
            @endsub
            @hassub('button_toggle')
            <a class="button button--primary" href="@sub('hero_cta', 'url')">@sub('hero_cta', 'title')</a>
            @endsub
        </div>
    </div>
</section>
