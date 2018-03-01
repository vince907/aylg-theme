<?php
/* Header Template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<?php wp_head(); ?>
</head>

<body>
	
    <header class="header">
		<nav class="main-navigation-container">
            <a href="index.html"><img src="<?php bloginfo('template_url') ?>/img/LogoTransparent.png" alt="" class="logo"></a>
			<?php
			wp_nav_menu( $arg = array (
				'menu_class' => 'main-navigation',
				'theme_location' => 'primary'
				));
			?>
		</nav>
	</header>