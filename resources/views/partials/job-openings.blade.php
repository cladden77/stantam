@group('job_openings')
<div class="job_openings">
    <div class="container">
        <div class="filter">
            <h3>Filter by:</h3>
            <select id='location'>
                <option value="all_locations" selected>Location</option>
                @fields('jobs')
                <option value="@sub('location')">@sub('location')</option>
                @endfields
            </select>
            <select id='team'>
                <option value="all_teams" selected>Team</option>
                @fields('jobs')
                <option value="@sub('team')">@sub('team')</option>
                @endfields
            </select>
            <select id='position'>
                <option value="all_positions" selected>Position</option>
                @fields('jobs')
                <option value="@sub('position')">@sub('position')</option>
                @endfields
            </select>
        </div>
        <div class="jobs">
            <div>
                <h3>@sub('title')</h3>
            </div>
            @fields('jobs')
            <div class="job" data-position="@sub('position')" data-location="@sub('location')" data-team="@sub('team')">
                <h4>@sub('job_title')</h4>
                <div class="job_btn"><a href="@sub('job_link')"></a><span>APPLY</span></div>
            </div>
            @endfields
        </div>
    </div>
</div>
@endgroup
<script>
    // Location Filter

    jQuery('#location').change(function(){
        var location1 = jQuery(this).children('option:selected').val();
        jQuery('.job').each(function() {
            if (location1 == 'all_locations') {
                jQuery(this).show();
            } else {
                if (jQuery(this).attr('data-location') != location1) {
                jQuery(this).hide();
            } else {
                jQuery(this).show();
            }
            }
        })
    })


    //Position Filter

    jQuery('#position').change(function(){
        var location1 = jQuery(this).children('option:selected').val();
        jQuery('.job').each(function() {
            if (jQuery(this).attr('data-position') != location1) {
                jQuery(this).hide();
            } else {
                jQuery(this).show();
            }
        })
    })


    //Team Filter

    jQuery('#team').change(function(){
        var location1 = jQuery(this).children('option:selected').val();
        jQuery('.job').each(function() {
            if (jQuery(this).attr('data-team') != location1) {
                jQuery(this).hide();
            } else {
                jQuery(this).show();
            }
        })
    })
</script>