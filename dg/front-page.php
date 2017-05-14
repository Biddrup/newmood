<?php get_header(); ?>
	<h1>This is our welcome page</h1>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'three_menu',
			)
		);
	?>
	<section class="search-form">
		<?php get_search_form(); ?>
	</section>
<?php get_footer(); ?>