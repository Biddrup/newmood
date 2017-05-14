<?php get_header(); ?>
	<?php
		if ( have_posts()) {
			while ( have_posts()) {
				the_post(); ?>
				<section class="single-article">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail('content-image'); ?>
					<?php the_content(); ?>
				</section>
		<?php	}
		}else {
			echo "The post has been deleted";
		}


	?>
<?php get_footer(); ?>