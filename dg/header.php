<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<h1><a href="<?php echo site_url();?>"><?php bloginfo('name'); ?></a></h1>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'one_menu',
				)
			);
		?>
	</header>
<hr>