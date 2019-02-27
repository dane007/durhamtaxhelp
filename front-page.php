<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package durhamtaxhelp
 */

 get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id='splash' class="landing-page">
        <div class="page1">
				<div class="site-branding">
					<?php
					// the_custom_logo();
					?>
					<?php
				$time_tells_tech_description = get_bloginfo( 'description', 'display' );
				if ( $time_tells_tech_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $time_tells_tech_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
				</div>

				<?php
					if ( function_exists( 'get_field' ) ) {
					$home_contents = get_field( 'home_contents' );
				?>
				<?php
				foreach ( $home_contents as $home_content ) {
					$title = $home_content['title'];
					$statement = $home_content['statement'];
					$image = $home_content['image'];
					$conversion_messages = $home_content['conversion_messages'];
					$findhelp = $home_content['find_help_button'];
					$qualify = $home_content['convert_button'];

          // Conversion statements
          $begin = $conversion_messages['begin'];
          // $failed = $conversion_messages['failed'];
          // $failed = $conversion_messages['success'];
          // $invalid = $conversion_messages['invalid'];

					// var_dump( $image );
				?>

				<div class="characters">
					<img src="<?php echo $image['url'] ?>" alt="">
				</div>
				<!-- Main Content for Front-Page -->

				<div class="intro grid-x grid-margin-x">

					<h1 class="title small-12"><?php echo $title; ?></h1>
					<p class="statement small-12"><?php echo $statement; ?></p>
					<p class="conversion small-12 medium-12"><?php echo $begin; ?></p>
					<div class="inp small-6 medium-4 large-4">
						<input class="userInp" type="number" name="" value="" placeholder="30000">
					</div>
					<div class="btn small-6 medium-2 large-3">
						<button class="calculate" type="button" name="button"><?php echo $qualify; ?></button>
					</div>
					<div class="bigbtn small-12">
						<a href="https://www.isaiahrobinson.ca">
						<button class="findTxHp" type="button" name="button"><?php echo $findhelp; ?></button>
						</a>
					</div>
				<?php
				}
				?>
			<?php
			}
			?>
			</div>
		</div>
    <!-- Locations Page -->
		<div id='locations' class="locations-page page2">
			<div id="map-section" class="grid-x">
				<h4 class="title small-12">Locations</h4>
				<div id="map-list" class="small-12 medium-12 large-3">
					<div class="map-list-option" data-id="0" data-name='divFinGrp'>
						<h3>Diverse Financial Group</h3>
						<h4>190 Harwood Avenue South (inside G Centre), Ajax</h4>
					</div>
						<div class="map-list-option" data-id="1" data-name='durhamComLegClin'>
							<h3>Durham Community Legal Clinic</h3>
						 <h4>200 John Street West, Unit B1, Oshawa</h4>
						</div>
				</div>

				<div id="map-box" class="small-12 medium-12 large-6">
				 	<div id="leafletMap"></div>
				</div>

				<div id="map-info" class="small-12 medium-12 large-3">
					 <h3>Diverse Financial Group</h3>
					 <h4>190 Harwood Avenue South (inside G Centre), Ajax</h4>
					 <p>By apointment only</p>
					 <p>Current and prior year returns</p>
					 <p>call 647-887-8725</p>
				</div>
  		 </div>
      </div>
      <div class="testimonials-page">
        <!-- Content for Testimonials Page -->

        <section class="content_sections" id="volunteer_page">
            <!-- Volunteer Section -->
            <div class="volunteer grid-container">

            <?php
                    if ( function_exists( 'get_field' ) ) {
                    $volunteer_contents = get_field( 'volunteer_contents' );
                ?>
                <?php
                foreach ( $volunteer_contents as $volunteer_content ) {
                    $main_title = $volunteer_content['main_title'];
                    $title_1 = $volunteer_content['title_1'];
                    $content_1 = $volunteer_content['content_1'];
                    $video = $volunteer_content['video'];
                    $video_description = $volunteer_content['video_description'];
                    $title_2 = $volunteer_content['title_2'];
                    $content_2 = $volunteer_content['content_2'];
                    // var_dump( $image );
                ?>

                <!-- Main Content for Volunteer-Section -->

                <h1 class="section_titles cell"><?php echo $main_title; ?></h1>

                <div class="volunteer grid-x grid-margin-x">

                    <div class="cell small-12 large-4 volunteer_content_container">
                        <h4 class="volunteer_subtitles"><?php echo $title_1; ?></h4>
                        <p class=""><?php echo $content_1; ?></p>
                        <div class="volunteer_button_container">
                            <a href="#location_page">
                                <button class="volunteer_button" type="button" name="button">Organizations >></button>
                            </a>
                        </div>
                        <p id="volunteer_p2">For FAQs and to get more in-depth information about being a volunteer, click the button below.</p>
                        <div class="volunteer_button_container">
                            <a href="https://www.canada.ca/en/revenue-agency/services/tax/individuals/community-volunteer-income-tax-program/lend-a-hand-individuals.html">
                                <button class="volunteer_button" type="button" name="button">Learn More >></button>
                            </a>
                        </div>
                    </div>

                    <div class="cell small-12 large-4">
                        <div id="video_container">
                            <img src="<?php echo $video['url'] ?>" alt="">
                        </div>
                        <p id="video_description"><?php echo $video_description; ?></p>
                    </div>

                    <div class="cell small-12 large-4 volunteer_content_container">
                        <h4 class="volunteer_subtitles"><?php echo $title_2; ?></h4>
                        <p class=""><?php echo $content_2; ?></p>
                        <div class="volunteer_button_container">
                            <a href="https://www.canada.ca/en/revenue-agency/news/newsroom/tax-tips/tax-tips-2014/tax-clinics-your-community-organization.html">
                                <button class="volunteer_button" type="button" name="button">Click here >></button>
                            </a>
                        </div>
                    </div>
                    </div>

                <?php
                }
                ?>
            <?php
            }
            ?>

            </div>
            <!-- end of Volunteer Section -->
        </section>

        <section>

          <!-- Page Heading -->
          <h1 id="testimonials_h1"> Testimonials</h1>

          <!-- Grid Container for positoong of testimonials cards -->
          <div class="grid-x grid-margin-x container">

          <?php
              if ( function_exists( 'get_field' ) ) {
              $testimonials = get_field( 'testimonials' );
          ?>

              <!-- for each function to output card for each field added -->
              <?php
              foreach ( $testimonials as $testimonial ) {

                  $statement = $testimonial['statement'];
                  $image = $testimonial['image'];
                  $imageBG = $testimonial['imageBG'];

              ?>
                  <!-- card structure -->
                      <!-- outer most div containing all smaller elements -->
            <div class="cell card small-4 large-6">
                <!-- background image for text -->
                     <img class="imageBG" src="<?php echo $imageBG['url'] ?>" alt="">
                <div class="grid-x grid-margin-x">
                   <!-- larger div for text to be placed inside -->
                    <div class="cell small-8 large-10 textContainer">
                        <p class="statement">
                            <?php echo $statement; ?>
                        </p>
                    </div>


                <!-- frame for image to be placed inside -->
                    <div class="cell small-4 large-6 large-offset-2 imageFrame">
                        <div id="frame">
                            <img class="image" src="<?php echo $image['url'] ?>" alt="">
                        </div>
                    </div>




                </div>
            </div>

        <?php
      }
      ?>
    <?php
    }
    ?>
  </section>
</div>
</div>
    </div>
		</main>
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
