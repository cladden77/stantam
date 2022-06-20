<?php 

if( get_sub_field('background_color') == 'blue' ) { ?>

    <section class="full-width-cta-blue">
        <div class="container pt-5 pb-3 color-blue">
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    @hassub('cta_text')
                    <h2>@sub('cta_text')</h2>
                    @endsub

                    <div class="text-center">
                    @hassub('cta_form')
                    @sub('cta_form')
                    @endsub

                    @hassub('cta_button')
                    <div class="my-4">
                    <a class="button button--outline-white" href="@sub('cta_button', 'url')">@sub('cta_button', 'title')</a>
                    @endsub
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
<?php  } ?>

<?php 

if( get_sub_field('background_color') == 'gray' ) { ?>

    <section class="full-width-cta-gray">
        <div class="container pt-5 pb-3 color-gray">
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    @hassub('cta_text')
                    <h2>@sub('cta_text')</h2>
                    @endsub

                    <div class="text-center">
                    @hassub('cta_form')
                    @sub('cta_form')
                    @endsub

                    @hassub('cta_button')
                    <div class="my-4">
                    <a class="button button--outline-blue" href="@sub('cta_button', 'url')">@sub('cta_button', 'title')</a>
                    @endsub
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
