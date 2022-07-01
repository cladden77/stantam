<section class="services-fifty-fifty my-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 col-sm-12 text-center text-md-left text-sm-center">
                @hassub('left_column_text')
                <h2 class="mb-3">@sub('left_column_text')</h2>
                @endsub
            </div>
            <div class="col-12 col-md-6 col-sm-12 text-center text-md-left text-sm-center">
                @hassub('right_column_subtitle')
                <h3 class="mb-3">@sub('right_column_subtitle')</h3>
                @endsub

                @hassub('right_column_content')
                <p>@sub('right_column_content')</p>
                @endsub

                @hassub('right_column_cta_text')
                <h4>@sub('right_column_cta_text')</h4>
                @endsub

                @hassub('cta_button')
                <div class="mt-4">
                <a class="button button--primary" href="@sub('cta_button', 'url')">@sub('cta_button', 'title')</a>
                @endsub
            </div>
        </div>
    </div>
</section>