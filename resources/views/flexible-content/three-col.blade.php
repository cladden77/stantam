<section class="three-col" id="@sub('three_col_id')">
    <div class="container p-5">
        <div class="row justify-content-center">
            <h2>@sub('three_col_header')</h2>
            <h3>@sub('three_col_subheader')</h3>
        </div>
        <div class="row row-cols-1 row-cols-md-2 justify-content-center">
            <div class="card-deck">
            <div class="card mx-2" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">@sub('three_col_left_card_title')</h5>
                    <p class="card-text">@sub('three_col_left_card_content')</p>
                    <a class="button button--primary" href="@sub('three_col_left_card_cta', 'url')">@sub('three_col_left_card_cta', 'title')</a>
                </div>
            </div>
            <div class="card mx-2" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">@sub('three_col_middle_card_title')</h5>
                    <p class="card-text">@sub('three_col_middle_card_content')</p>
                    <a class="button button--primary" href="@sub('three_col_middle_card_cta', 'url')">@sub('three_col_middle_card_cta', 'title')</a>
                </div>
            </div>
            <div class="card mx-2" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">@sub('three_col_right_card_title')</h5>
                    <p class="card-text">@sub('three_col_right_card_content')</p>
                    <a class="button button--primary" href="@sub('three_col_right_card_cta', 'url')">@sub('three_col_right_card_cta', 'title')</a>
                </div>
            </div>
         </div>
    </div>
</section>