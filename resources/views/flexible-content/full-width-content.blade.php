<section class="full-width-content full-width-content--@hassub('gray_toggle')@sub('gray_toggle')@endsub mt-3">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                @hassub('image')
                <img class="float-none float-md-left float-sm-none" src="@sub('image', 'url')" alt="@sub('image', 'alt')" />
                @endsub
                <div>
                @hassub('header')
                <h2 class="pb-4 @hassub('text-center')@sub('text-center')@endsub">@sub('header')</h2>
                @endsub

                @hassub('subheader')
                <h3 class="mb-3 @hassub('text-center')@sub('text-center')@endsub">@sub('subheader')</h3>
                @endsub

                @hassub('content')
                @sub('content')
                @endsub

                @hassub('full_width_cta_button')
                <div class="my-4 text-center">
                <a class="button button--primary" href="@sub('full_width_cta_button', 'url')">@sub('full_width_cta_button', 'title')</a>
                @endsub
                </div>
            </div>
        </div>
    </div>
</section>