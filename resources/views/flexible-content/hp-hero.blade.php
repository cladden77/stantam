{{-- Homepage Hero blade --}}

<section class="hp-hero container-fluid d-flex" style="background: url('@sub('hero_image')') center center/cover no-repeat;">
    <div class="row align-items-center pl-5 hp-hero__content-wrapper my-auto">
        <div class="text-center text-md-left text-sm-center px-5 py-5">
            <h1>@sub('hero_header')</h1>
            <h2>@sub('hero_subheader')</h2>
            <p>@sub('hero_content')</p>
            <a class="button button--primary" href="@sub('hero_cta', 'url')">@sub('hero_cta', 'title')</a>
        </div>
    </div>
</section>
