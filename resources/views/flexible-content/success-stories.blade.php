<section class="success-stories">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                @hassub('header')
                <h2>@sub('header')</h2>
                @endsub
                @hassub('subheader')
                <h3>@sub('subheader')</h3>
                @endsub
            </div>
              </div>

            <?php if( have_rows('success_story') ): ?>
            <?php while( have_rows('success_story') ): the_row(); ?>
            <div class="row">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>