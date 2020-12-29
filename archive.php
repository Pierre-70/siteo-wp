<?php get_header(); ?>

<h1 class="page-title"><?php the_archive_title(); ?></h1>	

<div class="container">
	<div class="row">

		<?php  while (have_posts() ) : the_post(); ?>

			<div class="col-12">
				<div class="box-article">
					<a href="<?php the_permalink(); ?>"></a>

						<?php the_category(); ?>
						<h2 class="box-article_title"><?php the_title(); ?></h2>

				</div>
				<hr/>
			</div>

		<?php endwhile; ?>

	</div>

	<nav class="nav-archives">
		<div class="d-flex flex-md-row">
			<div class="col-md-6">
				<?php if(get_previous_posts_link()):
					echo '<i class="fas fa-arrow-left"></i>';
					previous_posts_link( 'Articles suivants' );
				endif; ?>
			</div>

			<div class="col-md-6 text-right">
				<?php if(get_next_posts_link()):
					next_posts_link( 'Articles précedents');
					echo '<i class="fas fa-arrow-right"></i>';
				endif; ?>
			</div>
		</div>
	</nav>

</div>

<?php get_footer(); ?>