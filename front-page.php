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


?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id='splash' class="landing-page">
				<?php get_header(); ?>

				<h1>Title</h1>
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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
