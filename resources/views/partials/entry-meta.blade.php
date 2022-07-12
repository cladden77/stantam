<div class="d-inline-flex">
<time class="updated pr-2" datetime="{{ get_post_time('c', true) }}">Published: {{ get_the_date() }}</time> |
<p class="byline author vcard pl-2">
  {{ __('Author:', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
    {{ get_the_author() }}
  </a>
</p>
</div>