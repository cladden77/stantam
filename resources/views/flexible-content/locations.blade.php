<section class="locations py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-sm-12 text-left py-5 pl-5">
                @hassub('header')
                <h2>@sub('header')</h2>
                @endsub
                <?php if( have_rows('locations_repeater') ): ?>
                    <div class="">
                        @hassub('location_title')
                        <h3>@sub('location_title')</h3>
                        @endsub
                        <?php while( have_rows('locations_repeater') ): the_row(); ?>
                            @hassub('location_title')
                            <h3>@sub('location_title')</h3>
                            @endsub
                            @hassub('location_address')
                            <p>@sub('location_address')</p>
                            @endsub
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 col-sm-12 overflow-hidden">
                <img src="@sub('google_map', 'url')" alt="@sub('google_map', 'alt')">
            </div>
        </div>
    </div>
</section>