<section class="logo-slider py-5" id="@sub('logo_slider')">
    <div class="container">
        <div class="row justify-content-center mb-5">
            @hassub('logo_slider_header')
            <h2 class="col-12 text-center">@sub('logo_slider_header')</h2>
            @endsub
        </div>
        <div class="row">

        </div>
        @hassub('logo_slider_button')
        <div class="row justify-content-center">
            <div class="col text-center">
                <a class="button button--primary mt-3 mt-md-5 mt-sm-3" href="@sub('logo_slider_button', 'url')">@sub('logo_slider_button', 'title')</a>
            </div>
        </div>
        @endsub
    </div>
</section>