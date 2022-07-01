<section class="fifty-fifty-jobs my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-sm-12 text-center text-md-left text-sm-center">
                <h2 class="mb-3">@sub('subheader')</h2>
               <p>@sub('content')</p>
            </div>
            <div class="col-12 col-md-6 col-sm-12 text-center text-md-left text-sm-center pt-5 pt-md-0 pt-sm-5">
                <h3>@sub('title')</h3>
                @hassub('current_job_listings')
                @sub('current_job_listings')
                @endsub

                @hassub('cta_button')
                <div class="my-4">
                <a class="button button--primary" href="@sub('cta_button', 'url')">@sub('cta_button', 'title')</a>
                @endsub
            </div>
        </div>
    </div>
</section>