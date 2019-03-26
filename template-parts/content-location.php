<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Time_Tells_Tech
 */

?>


<?php
        $args = array(
            'post_type' => 'locations',
        );
		
		// WP Query variable to hold the args variable.
        $locations = new wp_Query( $args );

        if ( $locations->have_posts() ) {
            while ( $locations->have_posts() ) {
                $locations->the_post();
                // the_title();
				// the_content();
				
				$locationCutomizeds = get_field('locations');

				if(!empty($locationCutomizeds)){

					foreach($locationCutomizeds as $locationCutomized){
						$locationName= $locationCutomized['name'];
						$locationAddress = $locationCutomized['address'];
						$locationInformation = $locationCutomized['information'];
						
					}


				}
			}
			wp_reset_postdata();
        }
        ?>

<section class="content_sections" id="locations_page">
		<div id='locations' class="locations-page page2">
		<h1 class="section_titles">Locations</h1>
				<div id="map-section" class="grid-x">

						<div id="map-list" class="small-12 medium-12 large-3">
								<div class="map-list-option" data-id="0" data-name='divFinGrp'>
										<h3><?php echo $locationName; ?></h3>
										<h4></h4>
								</div>
								<div class="map-list-option" data-id="1" data-name='durhamComLegClin'>
										<h3></h3>
										<h4></h4>
								</div>
						</div>

						<div id="map-box" class="small-12 medium-12 large-6">
								<div id="leafletMap"></div>
						</div>

						<div id="map-info" class="small-12 medium-12 large-3">
								
						</div>
				</div>
		</div>
</section>
