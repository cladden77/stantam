<section class="video">
    <div class="container-fluid">
        @hassub('video_header')
        <div class="row justify-content-center pb-5">
            <div class="col-10 text-center">
                <h2>@sub('video_header')</h2>
            </div>
        </div>
        @endsub

        @hassub('video_player')
        <div class="row justify-content-center pb-5">
            <div class="col-6 text-center embed-container">
                @sub('video_player')
            </div>
            <div class="background-bar"></div>
        </div>
        @endsub
    </div>
</section>