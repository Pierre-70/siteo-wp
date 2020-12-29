<?php /* Template Name: Contact */
	get_header();
	$location = get_field("adresse_contact", "options");
?>

	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

			<div class="container">
				<h1><?php the_title(); ?></h1>

				<div class="d-flex flex-column flex-md-row align-items-center box">
					<?php if($location): ?>
						<div class="col-md-3">
							<i class="fas fa-map-marker-alt"></i>
							<?php echo esc_html( $location['address'] ); ?>
						</div>
					<?php endif; ?>

					<?php if(get_field("telephone_contact", "options")): ?>
						<div class="col-md-3">
							<i class="fas fa-phone-volume"></i>
							<?php the_field("telephone_contact", "options"); ?>
						</div>
					<?php endif; ?>

					<?php if(get_field("fax_contact", "options")): ?>
						<div class="col-md-3">
							<i class="fas fa-fax"></i>
							<?php the_field("fax_contact", "options"); ?>
						</div>
					<?php endif; ?>

					<?php if(get_field("e-mail_contact", "options")): ?>
						<div class="col-md-3">
							<i class="far fa-envelope-open"></i>
							<a href="mailto:<?php the_field('e-mail_contact', 'options'); ?>">
								<?php the_field("e-mail_contact", "options"); ?>
							</a>
						</div>
					<?php endif; ?>

				</div>

<!--				<?php echo do_shortcode('[caldera_form id="demande-de-contact"]'); ?>-->
			</div>

		<?php endwhile;
		else : ?>
		<p>Il n'y a rien a afficher</p>
	<?php endif; ?>

<?php get_footer(); ?>
