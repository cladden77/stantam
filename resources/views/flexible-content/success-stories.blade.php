<section class="success-stories py-3">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col text-center pb-5">
                @hassub('header')
                <h2>@sub('header')</h2>
                @endsub
                @hassub('subheader')
                <h3>@sub('subheader')</h3>
                @endsub
            </div>
              </div>

            <?php if( have_rows('success_story') ): ?>
            <div class="row no-gutters">
            <?php while( have_rows('success_story') ): the_row(); ?>
              <div class="col card-group">
                  <div class="card img-fluid">
                      <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                      <div class="card-img-overlay">
                        <h4 class="card-title text-center">@sub('title')</h4>

                        <div class="mb-3 text-center">
                          <a class="button button--primary" href="@sub('button', 'url')">@sub('button', 'title')</a>
                        </div>
                      </div>
                  </div>
              </div>
            <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>