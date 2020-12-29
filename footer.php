</main>

	<footer class="footer" role="contentinfo">
		<div class="container">

			<div class="d-flex flex-column flex-md-row">

				<div class="col-md-6">
					<strong><?php bloginfo('name'); ?></strong>

					<ul class="list">
						<?php if(get_field('contact_telephone', 'options')): ?>
							<li class="d-flex flex-row align-items-center">
								<i class="fas fa-phone"></i>
								<div><?php the_field('contact_telephone', 'options'); ?></div>
							</li>
						<?php endif; ?>

						<?php if(get_field('contact_fax', 'options')): ?>
							<li class="d-flex flex-row align-items-center">
								<i class="fas fa-fax"></i>
								<div><?php the_field('contact_fax', 'options'); ?></div>
							</li>
						<?php endif; ?>

						<?php 
							$location = get_field('contact_adresse', 'options');
							if($location):
						?>
							<li class="d-flex flex-row align-items-center">
								<i class="fas fa-map-marker-alt"></i>
								<address><?php echo esc_html($location['address']); ?></address>
							</li>
						<?php endif; ?>


						<?php if(get_field('contact_e-mail', 'options', 'options')): ?>
							<li class="d-flex flex-row align-items-center">
								<i class="fas fa-envelope-open"></i>
								<div><a href="mailto:<?php the_field('contact_e-mail', 'options'); ?>"><?php the_field('contact_e-mail', 'options'); ?></a></div>
							</li>
						<?php endif; ?>
					</ul>
				</div>

				<div class="col-md-6 social">
					<div class="d-flex flex-row align-items-center justify-content-end">
						<?php if(get_field('contact_telephone', 'options')): ?>
							<p class="text-right">
								<i class="fas fa-phone"></i>
								Contactez-nous au<br/>
								<span><?php the_field('contact_telephone', 'options'); ?></span>
							</p>
						<?php endif; ?>

						<?php if(get_field('facebook', 'options')): ?>
							<a href="<?php the_field('facebook', 'options'); ?>" target="_blank">
								<span class="svg">
									<i class="fab fa-facebook"></i>
								</span>
							</a>
						<?php endif; ?>

						<?php if(get_field('twitter', 'options')): ?>
							<a href="<?php the_field('twitter', 'options'); ?>" target="_blank">
								<span class="svg">
									<i class="fab fa-twitter"></i>
								</span>
							</a>
						<?php endif; ?>

						<?php if(get_field('linkedin', 'options')): ?>
							<a href="<?php the_field('linkedin', 'options'); ?>" target="_blank">
							<span class="svg">
								<i class="fab fa-linkedin"></i>
							</span>
							</a>
						<?php endif; ?>

						<?php if(get_field('instagram', 'options')): ?>
							<a href="<?php the_field('instagram', 'options'); ?>" target="_blank">
								<span class="svg">
									<i class="fab fa-instagram"></i>
								</span>
							</a>
						<?php endif; ?>
					</div>
				</div><!-- social -->

			</div>


			<p class="text-center">
				<?php bloginfo('name'); ?> - Tous droits réservés / All rights reserved. <?php echo get_the_time('Y'); ?> <a href="http://www.siteo.com" target="_blank">pensé par siteo</a>.
			</p>


		</div><!-- container -->
	</footer>

	<!-- Scroll to top -->
	<a href="#top" class="scroll-top">
		<svg
		 xmlns="http://www.w3.org/2000/svg"
		 xmlns:xlink="http://www.w3.org/1999/xlink"
		 width="24px" height="25px">
		<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
		 d="M17.790,25.003 L17.790,15.457 L24.001,15.457 L12.000,-0.003 L-0.001,15.457 L6.210,15.457 L6.210,25.003 L17.790,25.003 Z"/>
		</svg>
	</a>


	<!-- scripts plugin footer -->
	<?php wp_footer(); ?>

	</body>
</html>
