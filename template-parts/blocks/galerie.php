<?php
/**
 * Block Name: Galerie
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$images = get_field('images');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$index = 1;

if( $images ):
?>

	<div id="carousel<?php echo $id; ?>" class="carousel slide <?php echo $align_class; ?>" data-ride="carousel">

		<ol class="carousel-indicators">
			<?php foreach( $images as $image ): ?>
				<li data-target="#carousel<?php echo $id; ?>" data-slide-to="<?php echo $index - 1; ?>" <?php if($index == 1): ?>class="active"<?php endif; ?>></li>
			<?php endforeach; ?>
		</ol>

		<div class="carousel-inner">

			<?php foreach( $images as $image ): ?>
				<div class="carousel-item <?php if($index == 1): ?>active<?php endif; ?>">
					<img class="d-block w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
<!--
					  <div class="carousel-caption d-none d-md-block">
					  	<p><?php echo esc_attr($image['caption']); ?></p>
						</div>
-->
				</div>
			<?php $index++;
				endforeach; ?>

		</div>

		<a class="carousel-control-prev" href="#carousel<?php echo $id; ?>" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Précédent</span>
		</a>
		<a class="carousel-control-next" href="#carousel<?php echo $id; ?>" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Suivant</span>
		</a>
 	</div>

<?php endif; ?>

