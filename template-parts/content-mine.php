<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package durhamtaxhelp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Here is the landing page / header -->
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				durhamtaxhelp_posted_on();
				durhamtaxhelp_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
<!-- Get main content -->
<?php get_template_part( 'page-templates/page-template-splash', 'page' );?>
	</header><!-- .entry-header -->

	<?php durhamtaxhelp_post_thumbnail(); ?>

<!-- After the header, add the qualify page -->
	<div class="entry-content" id="how-to-qualify">
		<?php get_template_part( 'page-templates/page-template-qualify', 'page' );?>
	</div>
	<!-- .entry-content -->

<!-- After the first section, add the locations page -->
	<div class="entry-content" id="locations">
		<?php get_template_part( 'page-templates/page-template-locations', 'page' );?>
	</div>
	<!-- .entry-content -->


	<footer class="entry-footer">
		<?php durhamtaxhelp_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
