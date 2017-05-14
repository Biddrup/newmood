<?php get_header(); ?>
<h2><?php printf('search result for: %s', get_search_query() ) ?></h2>
<?php if ( have_posts()) {
		while ( have_posts()) {
				the_post(); ?>
				<div class="single-search-iteam">
					<h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title() ?></a></h2>
					<?php the_excerpt(); ?>
				</div>
		<?php	}	
}else{
	echo "Dont have any post";
}
?>
<?php get_footer(); ?>