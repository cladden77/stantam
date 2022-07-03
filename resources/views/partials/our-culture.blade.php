@group('our_culture')
<div class="our_culture">
    <div class="container">
        <h2>@sub('title')</h2>
        <div class="values row">
            <div class="value col-12 col-md-6 col-sm-12">
                @fields('text_on_left_repeat')
                <div>
                    <h4>@sub('title_of_box')</h4>
                    <p>@sub('text_of_the_box')</p>
                </div>
                @endfields
            </div>
            <div class="value col-12 col-md-6 col-sm-12">
                @fields('text_on_right_repeat')
                <div>
                    <h4>@sub('title_of_box')</h4>
                    <p>@sub('text_of_the_box')</p>
                </div>
                @endfields
            </div>
        </div>
    </div>
</div>
</div>
@endgroup