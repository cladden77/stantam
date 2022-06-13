<section class="info-slider py-5" id="@sub('info_slider')">
        <div class="row justify-content-center mb-5">
            <h2 class="col-12 text-center">@sub('info_slider_header')</h2>
            <h3 class="col-8 text-center">@sub('info_slider_subheader')</h3>
        </div>
    </div>

<? if( have_rows('info_slides') ):
	$i = 0; // Set the increment variable
	
	echo '<div id="info-slides" class="carousel slide" data-ride="carousel">
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
            <div class="row">
            <div class="col">
                <img src="@sub('slide_image')" alt="@sub('slide_image')">
            </div>
            <div class="col">
                @sub('slide_content')
                <a class="button button--primary" href="@sub('slide_button', 'url')">@sub('slide_button', 'title')</a>
            </div>
        </div>
    </div>	
	              
	<?php   $i++; // Increment the increment variable

	endwhile; //End the loop 
	
	echo '</div>
			 <a class="carousel-control-prev" href="#info-slides" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#info-slides" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>';

else :

    // no rows found

endif; ?>
</section>