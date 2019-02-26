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
    </div>
		</main>
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
