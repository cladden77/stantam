<section class="timeline py-5">
    <div class="container">
            <?php if( have_rows('timeline_repeater') ): ?>
            <?php while( have_rows('timeline_repeater') ): the_row(); ?>
            <div class="row">
            <div class="card @sub('position') my-3">
               <div class="timeline-content">
                    @hassub('title')
                    <div class="title-wrapper">
                        <h2 class="card-title">@sub('title')</h2>
                    </div>
                    @endsub

                    @hassub('image')
                    <div class="timeline-img card-img-top">
                        <img src="@sub('image', 'url')" alt="@sub('image', 'alt')">
                    </div>
                    @endsub
                    
                    @hassub('description')
                    <div class="card-body description">
                        <p class="card-text">@sub('description')</p>
                    </div>
                    @endsub
                </div>
            </div>
        </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
</section>