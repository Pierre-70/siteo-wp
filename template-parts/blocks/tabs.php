<?php

/**
 * Tabs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'tab-' . $block['id'];

// Load values and assign defaults.
$onglets = get_field('onglet');
$indextab = 1;
$indexpane = 1;

?>

<ul class="nav nav-pills mb-3" id="pills-<?php echo esc_attr($id); ?>" role="tablist">
 	<?php if( have_rows('onglet') ):
		while ( have_rows('onglet') ) : the_row(); ?>
			<li class="nav-item">
				<a class="nav-link <?php if($indextab == 1): ?> active<?php endif; ?>"
					id="pills-tab-<?php echo $indextab; ?>" data-toggle="pill" href="#pills-<?php echo $indextab; ?>" role="tab" aria-controls="pills-<?php echo $indextab; ?>" aria-selected="<?php if($indextab == 1): ?>true<?php else: ?>false<?php endif; ?>"><?php the_sub_field('titre'); ?></a>
			</li>
		<?php $indextab++;
		endwhile;
	endif; ?>
</ul>

<div class="tab-content" id="pills-<?php echo esc_attr($id); ?>-content">
 	<?php if( have_rows('onglet') ):
		while ( have_rows('onglet') ) : the_row(); ?>
			<div class="tab-pane fade <?php if($indexpane == 1): ?>show active<?php endif; ?>" id="pills-<?php echo $indexpane; ?>" role="tabpanel" aria-labelledby="pills-tab-<?php echo $indexpane; ?>">
			<?php the_sub_field('contenu'); ?>
		</div>
		<?php $indexpane++;
		endwhile;
	endif; ?>
</div>
