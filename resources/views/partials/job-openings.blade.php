@group('job_openings')
<div class="job_openings">
    <div class="container">
        <div class="filter">
            <h3>Filter by:</h3>
            <select id='position'>
                @fields('jobs')
                <option value="@sub('position')">@sub('position')</option>
                @endfields
            </select>
            <select id='location'>
                @fields('jobs')
                <option value="@sub('location')">@sub('location')</option>
                @endfields
            </select>
            <select id='team'>
                @fields('jobs')
                <option value="@sub('team')">@sub('team')</option>
                @endfields
            </select>
        </div>
        <div>
            <h3>@sub('title')</h3>
        </div>
        <div class="jobs">
            @fields('jobs')
            <div class="job" data-position='@sub(' position')' data-location='@sub(' location')' data-team='@sub(' team')'>
                <h4>@sub('job_title')</h4>
                <button class="job_btn"><a href="@sub('job_link')">APPLY</a></button>
            </div>
            @endfields
        </div>
    </div>
</div>
@endgroup