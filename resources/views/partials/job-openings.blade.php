@group('job_openings')
<div class="job_openings">
    <div class="container">
        <div class="filter">
            <h3>Filter by:</h3>
            <select id='location'>
                <option value="all_locations" selected>All Locations</option>
                <?php if (have_rows('locations')) :
                    $sub_values = array();
                    while (have_rows('locations')) : the_row();
                        array_push($sub_values, get_sub_field('location'));
                    endwhile;
                    $sub_values = array_unique($sub_values);
                    foreach ($sub_values as $value) {
                        echo "<option value='$value'>" . $value . "</option>";
                    }
                endif; ?>

            </select>
            <select id='team'>
                <option value="all_teams" selected>All Teams</option>
                <?php if (have_rows('jobs')) :
                    $sub_values = array();
                    while (have_rows('jobs')) : the_row();
                        array_push($sub_values, get_sub_field('team'));
                    endwhile;
                    $sub_values = array_unique($sub_values);
                    foreach ($sub_values as $value) {
                        echo "<option value='$value'>" . $value . "</option>";
                    }
                endif; ?>
            </select>
            <select id='position'>
                <option value="all_positions" selected>All Positions</option>
                <?php if (have_rows('jobs')) :
                    $sub_values = array();
                    while (have_rows('jobs')) : the_row();
                        array_push($sub_values, get_sub_field('position'));
                    endwhile;
                    $sub_values = array_unique($sub_values);
                    foreach ($sub_values as $value) {
                        echo "<option value='$value'>" . $value . "</option>";
                    }
                endif; ?>
            </select>
        </div>
        <div class="jobs">
            <div>
                <h3>@sub('title')</h3>
            </div>
            @fields('jobs')
            <div class="job" data-position="@sub('position')" data-location="@sub('location')" data-team="@sub('team')">
                <a href="@sub('job_link')"><h4>@sub('job_title')</h4></a>
                <div class="job_btn"><a href="@sub('job_link')"></a><span>APPLY</span></div>
            </div>
            @endfields
        </div>
    </div>
</div>
@endgroup
<script>
    //Filter

    function CheckJobs(a, b, c) {
        jQuery('.job').each(function(index, value) {
            let l = jQuery(this).attr('data-location');
            let t = jQuery(this).attr('data-team');
            let p = jQuery(this).attr('data-position');

            if (a != 'all_locations' && b != 'all_teams' && c != 'all_positions') {
                if (l == a && t == b && p == c) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            } else if (a == 'all_locations' && b != 'all_teams' && c != 'all_positions') {
                if (t == b && p == c) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            } else if (a == 'all_locations' && b == 'all_teams' && c != 'all_positions') {
                if (p == c) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            } else if (a == 'all_locations' && b != 'all_teams' && c == 'all_positions') {
                if (t == b) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            } else if (a != 'all_locations' && b == 'all_teams' && c == 'all_positions') {
                if (l == a) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            } else if (a != 'all_locations' && b != 'all_teams' && c == 'all_positions') {
                if (l == a && t == b) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            } else if (a != 'all_locations' && b == 'all_teams' && c != 'all_positions') {
                if (l == a && p == c) {
                    jQuery(this).show();
                } else {
                    jQuery(this).hide();
                }
            } else {
                jQuery(this).show();
            }


        })
    }



    jQuery('.filter select').click(function() {
        let choices = [];
        choices.push(jQuery('#location').children('option:selected').val());
        choices.push(jQuery('#team').children('option:selected').val());
        choices.push(jQuery('#position').children('option:selected').val());
        CheckJobs(choices[0], choices[1], choices[2])
    })
</script>