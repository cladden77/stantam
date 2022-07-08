<section class="filing-steps pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                @hassub('header')
                <h2>@sub('header')</h2>
                @endsub
                @hassub('subheader')
                <h3>@sub('subheader')</h3>
                @endsub
            </div>
              </div>
              
            <?php if( have_rows('filing_steps_repeater') ): ?>
            <?php while( have_rows('filing_steps_repeater') ): the_row(); ?>
            <div class="row">
            
            <div class="card @sub('position') my-3">
               <hr />
               <div class="filing-steps-content">          
                    @hassub('description')
                    <div class="card-body description">
                        <div class="card-text text-center text-lg-left text-md-center">@sub('description')</div>
                    </div>
                    @endsub
                </div>
            </div>
        </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="text-center">
                <i class="arrow"></i>
            </div>
    </div>
</section>