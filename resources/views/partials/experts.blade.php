@group('experts')
<div class="experts container">
    <h3>@sub('title')</h3>
    <p>@sub('description')</p>
    <div class="experts_photos row">
        @fields('first_row')
        <div class="col-lg-2 col-md-6">
            <img src="">
            <div>
                <strong>
                    @sub('name')
                </strong>
                <p>
                    @sub('title')
                </p>
            </div>
        </div>
        @endfields
    </div>
    <div class="experts_photos row">
        @fields('second_row')
        <div class="col-lg-2 col-md-6">
            <img src="">
            <div>
                <strong>
                    @sub('name')
                </strong>
                <p>
                    @sub('title')
                </p>
            </div>
        </div>
        @endfields
    </div>
    <div class="experts_photos row">
        @fields('third_row')
        <div class="">
            <img src="">
            <div>
                <strong>
                    @sub('name')
                </strong>
                <p>
                    @sub('title')
                </p>
            </div>
        </div>
        @endfields
    </div>
</div>
@endgroup