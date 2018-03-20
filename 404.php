<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="container">
		<main class="container" >

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.'); ?></h1>
				</header>

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>

					<?php get_search_form(); ?>
				</div>
			</section>

		</main>

	</div>

<?php get_footer(); ?>
