<?php
	if ( ! function_exists( 'singlepost_nav' ) ) :

		function singlepost_nav() {
			// Don't print empty markup if there's nowhere to navigate.
			$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
			$next     = get_adjacent_post( false, '', false );

			if ( ! $next && ! $previous ) {
				return;
			}
	?>

	<div class="product-link">
		<h2 class="sr-only"><?php _e( 'Post navigation', 'understrap' ); ?></h2>

		<?php
			if ( get_next_post_link() ) {
				next_post_link( '%link', _x( 'Article précédent', 'Article précédent', 'understrap' ) );
			}
		?>

			<?php	if ( get_previous_post_link() ) {
				previous_post_link( '%link', _x( 'Article suivant', 'Article suivant', 'understrap' ) );
			}
		?>
	</div>

	<?php
		}
	endif;
?>