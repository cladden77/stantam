<section class="services-hero ">
    <div class="container">
        <div class="row">
            <div class="col">
                @hassub('header')
                <h1>@sub('header')</h1>
                @endsub
                @hassub('subheader')
                <h2>@sub('subheader')</h2>
                @endsub
                @hassub('content')
                <p>@sub('content')</p>
                @endsub
                @hassub('cta_arrow')
                <div class="cta-arrow">
                @sub('cta_arrow')
                </div>
                @endsub
            </div>

            <div class="col">
                @hassub('form_header')
                <h3>@sub('form_header')</h3>
                @endsub
                @hassub('form_subheader')
                <p>@sub('form_subheader')</p>
                @endsub
                @hassub('form')
                @sub('form')
                @endsub
            </div>
        </div>
    </div>
</section>