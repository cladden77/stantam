<section class="info-slider pt-5" id="@sub('info_slider')">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <h2 class="col-12 text-center">@sub('info_slider_header')</h2>
            <h3 class="col-10 text-center">@sub('info_slider_subheader')</h3>
        </div>

<? if( have_rows('info_slides') ):
	$i = 0; // Set the increment variable
	
	echo '<div id="info-slides" class="carousel slide" data-ride="carousel" data-interval="false">
			<ol class="carousel-indicators">';
			
	// loop through the rows of data for the tab header
    while ( have_rows('info_slides') ) : the_row();
    ?>
    
    <li data-target="#info-slides" data-slide-to="<?php echo $i;?>" class="<?php if($i == 0) echo 'active';?>"></li>
			
	<?php   $i++; // Increment the increment variable	
	
	endwhile; //End the loop  
		
	echo 	'</ol>
		  <div class="carousel-inner">';
	
 	// loop through the rows of data for the tab header
 	$i = 0; // Set the increment variable
    while ( have_rows('info_slides') ) : the_row();	?>
	
	 <div class="carousel-item <?php if($i == 0) echo 'active';?>">
            <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-sm-12 text-center">
                <img src="@sub('slide_image')" alt="@sub('slide_image')">
            </div>
            <div class="col-12 col-md-6 col-sm-12 text-center text-md-left text-sm-center pt-3 pt-md-0 pt-sm-3">
                @sub('slide_content')
                <a class="button button--primary mt-3 mt-md-5 mt-sm-3" href="@sub('slide_button', 'url')">@sub('slide_button', 'title')</a>
            </div>
        </div>
    </div>	
	              
	<?php   $i++; // Increment the increment variable

	endwhile; //End the loop 

else :

    // no rows found

endif; ?>
</div>
</section>