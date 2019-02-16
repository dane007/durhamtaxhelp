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
				<!-- Main Content for Front-Page -->
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				<!-- After initial content... -->
				<?php
					if ( function_exists( 'get_field' ) ) {
					$home_contents = get_field( 'home_contents' );
				?>
				<div class="intro">
				<?php
				foreach ( $home_contents as $home_content ) {
					$title = $home_content['title'];
					$statement = $home_content['statement'];
					$conversion = $home_content['conversion'];
					// var_dump( $image );
					?>
				<div class="slide">
					<h1 class="title"><?php echo $title; ?></h1>
					<p class="statement"><?php echo $statement; ?></p>
					<input class="userInp" type="number" name="" value="">
					<button class="calculate" type="button" name="button">QUALIFY</button>
					<p class="conversion">What Is Your Income? The average is <?php echo $conversion; ?></p>
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
		<div id='locations' class="locations-page">
			<h4 id="locations_page">Locations</h4>
			<div id="map-section">
			<div id="map-list">
				<div class="map-list-option" data-id="0" data-name='divFinGrp'>
					<h3>Diverse Financial Group</h3>
				 <h4>190 Harwood Avenue South (inside G Centre), Ajax</h4>
				</div>
				<div class="map-list-option" data-id="1" data-name='durhamComLegClin'>
					<h3>Durham Community Legal Clinic</h3>
				 <h4>200 John Street West, Unit B1, Oshawa</h4>
				</div>
			</div>

			<div id="map-box">
			 <div id="leafletMap"></div>
			</div>

			<div id="map-info">
			 <h1>Diverse Financial Group</h1>
			 <h2>190 Harwood Avenue South (inside G Centre), Ajax</h2>
			 <p>By apointment only</p>
			 <p>Current and prior year returns</p>
			 <p>call 647-887-8725</p>
			</div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
