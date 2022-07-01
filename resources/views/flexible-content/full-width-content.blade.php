<section class="full-width-content py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <img class="float-none float-md-left float-sm-none" src="@sub('image', 'url')" alt="@sub('image', 'alt')" />

                <div>
                @hassub('header')
                <h2>@sub('header')</h2>
                @endsub

                @hassub('subheader')
                <h3 class="mb-3">@sub('subheader')</h3>
                @endsub

                @hassub('content')
                @sub('content')
                @endsub

                @hassub('cta_button')
                <div class="my-4 text-center">
                <a class="button button--primary" href="@sub('cta_button', 'url')">@sub('cta_button', 'title')</a>
                @endsub
                </div>
            </div>
        </div>
    </div>
</section>