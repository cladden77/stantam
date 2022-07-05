@group('experts')
<div class="experts container">
    <div class="experts_header">
    <h2>@sub('title')</h2>
    <p>@sub('description')</p>
    </div>
    <div class="experts_photos row">
        @fields('first_row')
        <div class="col-lg col-sm-8 photo">
            <img src="@sub('person_photo')">
            <div class="overlay">
                <div class="name">
                    <span>
                        @sub('name')

                    </span>
                </div>
                <div class="position">
                    <p>
                        @sub('title')
                    </p>
                </div>
            </div>
        </div>
        @endfields
    </div>
    <div class="experts_photos row">
        @fields('second_row')
        <div class="col-lg col-sm-8 photo">
            <img src="@sub('person_photo')">
            <div class="overlay">
                <div class="name">
                    <span>
                        @sub('name')

                    </span>
                </div>
                <div class="position">
                    <p>
                        @sub('title')
                    </p>
                </div>
            </div>
        </div>
        @endfields
    </div>
    <div class="experts_photos row">
        @fields('third_row')
        <div class="col-lg col-sm-8 photo">
            <img src="@sub('person_photo')">
            <div class="overlay">
                <div class="name">
                    <span>
                        @sub('name')

                    </span>
                </div>
                <div class="position">
                    <p>
                        @sub('title')
                    </p>
                </div>
            </div>
        </div>
        @endfields
    </div>
</div>
@endgroup