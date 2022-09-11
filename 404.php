<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

?>

<section>
	<header>
		<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
	</header><!-- .page-header -->
	<div>
		<p>'It looks like nothing was found at this location.'</p>
		<a href="<?php print get_home_url(); ?>">Back to Home page</a>
	</div>
</section>
