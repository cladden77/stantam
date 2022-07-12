@group('experts')
<div class="experts container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="experts_header text-center">
                <h2>@sub('title')</h2>
                <p>@sub('description')</p>
            </div>
        </div>
    </div>
    <div class="row row-cols-5 justify-content-center">
        
        @fields('experts_repeater')
        <div class="experts_photos">
        <div class="col photo px-2">
            <img src="@sub('person_photo', 'url')">
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
    </div>
        @endfields
    
    </div>
</div>
@endgroup