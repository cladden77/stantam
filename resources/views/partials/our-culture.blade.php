@group('our_culture')
<div class="our_culture py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>@sub('title')</h2>

                <div class="values">
                    <div class="value col-12 m-auto">
                        @fields('text_on_left_repeat')
                        <div class="py-3">
                            <h4>@sub('title_of_box')</h4>
                            <p>@sub('text_of_the_box')</p>
                        </div>
                        @endfields
                    
                        @fields('text_on_right_repeat')
                        <div class="py-3">
                            <h4>@sub('title_of_box')</h4>
                            <p>@sub('text_of_the_box')</p>
                        </div>
                        @endfields
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endgroup