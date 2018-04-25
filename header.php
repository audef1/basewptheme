<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>
<header>
<div id="search">
<form role="search" method="get" id="searchform" class="searchform" action="http://localhost/">
				<div>
					<input value="" name="s" id="search" type="text">
					<input id="search-submit" value="Search" type="submit">
				</div>
			</form>
</div>
<div id="social"></div>
<nav id="mainnav">
	<?php
		wp_nav_menu();
	?>
</nav>
</header>
