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
	</header><!-- .entry-header -->

	<?php durhamtaxhelp_post_thumbnail(); ?>

	<div class="entry-content">
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
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php durhamtaxhelp_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
