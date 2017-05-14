<?php get_header(); ?>
	<article class="article">
		<?php 
			if ( have_posts()) {
				while ( have_posts()) {
					the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
					<?php the_post_thumbnail('excerpt-image'); ?>
					<?php the_excerpt(); ?>
			<?php	}
			}else{
				echo "We need to make some post";
			}
		 ?>
	</article>
<?php get_footer(); ?>