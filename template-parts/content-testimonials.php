<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Time_Tells_Tech
 */

?>
<section class="content_sections" id="testimonials_page">
		<!-- Page Heading -->
		<h1 class="section_titles"> Testimonials</h1>

		<!-- Content for Testimonials Page -->
		<div class="testimonials-page">

				<!-- Grid Container for positoong of testimonials cards -->
				<div class="grid-x grid-margin-x container align-center">

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

<!-- <div class="grid-container"> -->
		<!-- card structure -->
		<!-- outer most div containing all smaller elements -->
		<div class="cell card small-offset-0 small-12 medium-offset-1 medium-10 large-offset-0  large-6">
				<!-- background image for text -->
				<img class="imageBG" src="<?php echo $imageBG['url'] ?>" alt="">
				<div class="grid-x grid-margin-x">
						<!-- larger div for text to be placed inside -->
						<div class="cell small-offset-1 small-10 medium-10  large-10 textContainer">
								<p class="statement">
										<?php echo $statement; ?>
								</p>
						</div>

						<!-- frame for image to be placed inside -->
						<div class="cell small-offset-3 small-6 medium-6 large-6 large-offset-3 imageFrame">
								<div id="frame">
										<img class="image" src="<?php echo $image['url'] ?>" alt="">
								</div>
						</div>

				</div>
		</div>
<!-- </div> -->

		<?php
}
?>
												<?php
}
?>
</section>
