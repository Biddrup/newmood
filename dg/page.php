<?php get_header(); ?>
	<?php
		if ( have_posts()) {
			while ( have_posts()) {
				the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
		<?php	}
		}else{
			echo "The page has been deleted";
		}
	?>
<?php get_footer(); ?>