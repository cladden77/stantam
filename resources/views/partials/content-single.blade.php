


<article @php post_class() @endphp>
  <?php if( have_rows('post_content') ): ?>
          <?php while( have_rows('post_content') ): the_row(); ?>
              <?php if( get_row_layout() == 'page_hero' ): ?>
              @include('flexible-content.page-hero')
              <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>

  <div class="container">
    <div class="row">
      <header>
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
        @include('partials/entry-meta')
      </header>
    </div>

    <div class="row">
      <div class="sidebar col-3 d-none d-lg-block text-left mt-5 pl-0">
        <p class="sidebar-title">Topics in this article:</p>
        @fields('sidebar_links')
        @hassub('link_title')
          <p>@hassub('link')
            <a href="@sub('link')">
            @sub('link_title')
            @endsub
            </a>
          </p>
        @endsub
        @endfields
      </div>
  
      <div class="col-12 col-lg-9">
        <div class="entry-content mt-5">
          @php the_content() @endphp
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
  </div>
</article>