<div class="header container-fluid p-0">
    <div class="row align-items-center header__background" style="background: url(@field('header_background_image', 'url')) center center/cover no-repeat;">
        <div class="pl-0 pl-lg-5 pl-md-0 my-auto pt-5">
            <div class="col-12 col-md-10 col-sm-12 text-center text-md-left text-sm-center px-5 pt-5">
                @hasfield('title')
                <h1>@field('title')</h1>
                @endfield
                @hasfield('content')
                <p>@field('content')</p>
                @endfield
            </div>
        </div>
    </div>
</div>