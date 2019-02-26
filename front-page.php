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


          // Conversion statements
          $begin = $conversion_messages['begin'];
          $failed = $conversion_messages['failed'];
          $failed = $conversion_messages['success'];
          $invalid = $conversion_messages['invalid'];


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
						<button class="calculate" type="button" name="button">QUALIFY</button>
					</div>
					<div class="bigbtn small-12">
						<a href="https://www.isaiahrobinson.ca">
						<button class="findTxHp" type="button" name="button">Find Tax Help</button>
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

		</main>
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
