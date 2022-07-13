<section class="three-col" id="@sub('three_col_id')">
    <div class="container p-5">
        <div class="row justify-content-center">
            <h2 class="text-center">@sub('three_col_header')</h2>
            <h3 class="text-center">@sub('three_col_subheader')</h3>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="card-deck">
            <div class="card mx-2">
                <div class="card-body text-center">
                    <h4 class="card-title my-4">@sub('three_col_left_card_title')</h4>
                    <p class="card-text">@sub('three_col_left_card_content')</p>
                </div>
                @hassub('three_col_middle_card_cta')
                <div class="card-footer text-center mb-4"><a class="button button--primary" href="@sub('three_col_left_card_cta', 'url')">@sub('three_col_left_card_cta', 'title')</a>
                </div>
                @endsub
            </div>
            <div class="card mx-2">
                <div class="card-body text-center">
                    <h4 class="card-title my-4">@sub('three_col_middle_card_title')</h4>
                    <p class="card-text">@sub('three_col_middle_card_content')</p>
                </div>
                @hassub('three_col_middle_card_cta')
                <div class="card-footer text-center mb-4"><a class="button button--primary" href="@sub('three_col_middle_card_cta', 'url')">@sub('three_col_middle_card_cta', 'title')</a>
                </div>
                @endsub
            </div>
            <div class="card mx-2">
                <div class="card-body text-center">
                    <h4 class="card-title my-4">@sub('three_col_right_card_title')</h4>
                    <p class="card-text">@sub('three_col_right_card_content')</p>
                </div>
                @hassub('three_col_middle_card_cta')
                <div class="card-footer text-center mb-4"><a class="button button--primary" href="@sub('three_col_right_card_cta', 'url')">@sub('three_col_right_card_cta', 'title')</a>
                </div>
                @endsub
            </div>
         </div>
    </div>
</section>