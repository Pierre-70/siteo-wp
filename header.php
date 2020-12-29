<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>"/>
		<meta content="width=device-width, initial-scale=1" name="viewport">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/manifest.json">
		<link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">

		<!-- scripts plugin head -->
		<?php wp_head(); ?>
		<?php if(get_field('activer_google_analytics', 'options') == 'actif'): ?>
			<?php if(get_field('urchin_tracker', 'options')): ?>
				<!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field('urchin_tracker', 'options') ?>"></script>
				<script>
					window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());

					gtag('config', '<?php the_field('urchin_tracker', 'options') ?>');
				</script>
			<?php endif; ?>
		<?php endif; ?>
	</head>

	<body <?php body_class(); ?>>

		<header class="header" role="banner">

			<div class="container">

				<div class="d-flex flex-column flex-md-row align-items-center no-gutters">
					<div class="col-md-5">
						<div class="brand">
							<?php $image = get_field('logo', 'options');
								if(!is_front_page()): ?>
									<a href="/">
										<?php if(!empty( $image )): ?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php else: ?>
											<h1><?php bloginfo('name'); ?></h1>
										<?php endif; ?>
									</a>
								<?php else: ?>

									<?php if(!empty( $image )): ?>
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php else: ?>
										<h1><?php bloginfo('name'); ?></h1>
									<?php endif; ?>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-md-7">
							<?php
									wp_nav_menu( array(
										'theme_location' => 'menu_langues',
										'container'    => false,
										'menu_class'     => '',
										'fallback_cb'    => '__return_false',
										'items_wrap'     => '<ul class="menu_langues navbar-nav d-flex flex-md-row flex-column justify-content-end no-gutters">%3$s</ul>',
										'depth'        => 2,
									'walker'       => new b4st_walker_nav_menu()
									) );
								?>
					</div>

				</div><!-- d-flex -->

			</div><!-- container -->

	</header>

	<nav class="navbar navbar-expand-md" role="navigation" aria-label="Menu principal">
		<div class="container">

			<div class="d-flex flex-column flex-md-row align-items-center justify-content-end">
				<div class="col-md-3 visible-fixed">
					<img src="<?php bloginfo('template_directory'); ?>/img/ecole-aujourdhui_logo-small-banner.gif" alt="">
				</div>

				<div class="col-md-9">
					<button class="navbar-toggler toggle-button d-block d-md-none" type="button" data-toggle="collapse" data-target="#menu-top" aria-controls="menu-top" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="navbar-collapse collapse text-md-center d-md-block" id="menu-top">
					<?php
							wp_nav_menu( array(
								'theme_location' => 'menu_principal',
								'container'    => false,
								'menu_class'     => '',
								'fallback_cb'    => '__return_false',
								'items_wrap'     => '<ul class="navbar-nav d-flex flex-md-row flex-column justify-content-end no-gutters">%3$s</ul>',
								'depth'        => 2,
							'walker'       => new b4st_walker_nav_menu()
							) );
						?>
					</div>

				</div>
			</div><!-- d-flex -->


		</div><!-- container -->
	</nav><!-- navbar -->

	<main role="main" class="main">
