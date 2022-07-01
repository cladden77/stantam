<section class="services-fifty-fifty-image my-5 py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="order-2 order-md-1 col-12 col-md-6 col-sm-12 text-center text-md-left text-sm-center">
                @hassub('header')
                <h2>@sub('header')</h2>
                @endsub

                @hassub('subheader')
                <h3 class="mb-3">@sub('subheader')</h3>
                @endsub

                @hassub('content')
                <p>@sub('content')</p>
                @endsub

                @hassub('cta_button')
                <div class="mt-4">
                <a class="button button--primary" href="@sub('cta_button', 'url')">@sub('cta_button', 'title')</a>
                @endsub
            </div>
            </div>
            <div class="order-1 order-md-2 col-12 col-md-6 col-sm-12 text-center text-md-right mb-5 mb-lg-0">
                <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" />
                
            </div>

            <div class="bg-bar"></div>
        </div>
    </div>
</section>