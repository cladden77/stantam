<section class="satisfaction py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                @hassub('satisfaction_header')
                <h2>@sub('satisfaction_header')</h2>
                @endsub
                
                @hassub('satisfaction_content')
                @sub('satisfaction_content')
                @endsub
            </div>
        </div>

        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md col-sm-12 text-center">
                @hassub('point_one_icon')
                <img src="@sub('point_one_icon', 'url')" alt="@sub('point_one_icon', 'alt')" />
                @endsub
                @hassub('point_one_title')
                <h3 class="pt-3">@sub('point_one_title')</h3>
                @endsub
                @hassub('point_one_content')
                @sub('point_one_content')
                @endsub
            </div>
            <div class="col-12 col-md col-sm-12 text-center">
                @hassub('point_two_icon')
                <img src="@sub('point_two_icon', 'url')" alt="@sub('point_two_icon', 'alt')" />
                @endsub
                @hassub('point_two_title')
                <h3 class="pt-3">@sub('point_two_title')</h3>
                @endsub
                @hassub('point_two_content')
                @sub('point_two_content')
                @endsub
            </div>
            <div class="col-12 col-md col-sm-12 text-center">
                @hassub('point_three_icon')
                <img src="@sub('point_three_icon', 'url')" alt="@sub('point_three_icon', 'alt')" />
                @endsub
                @hassub('point_three_title')
                <h3 class="pt-3">@sub('point_three_title')</h3>
                @endsub
                @hassub('point_three_content')
                @sub('point_three_content')
                @endsub
            </div>
        </div>
    </div>
</section>