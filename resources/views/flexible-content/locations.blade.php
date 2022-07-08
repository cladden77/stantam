<section class="locations py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center py-5 pl-5">
                @hassub('header')
                <h2 class="pb-3">@sub('header')</h2>
                @endsub
            </div>
        </div>
        <?php if( have_rows('locations_repeater') ): ?>            
            <div class="row justify-content-center">
                <?php while( have_rows('locations_repeater') ): the_row(); ?>
                    <div class="col-12 col-md-6 text-center">
                        @hassub('location_title')
                        <h3>@sub('location_title')</h3>
                        @endsub
                        @hassub('location_address')
                        <p>@sub('location_address')</p>
                        @endsub
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>