<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<title>Demo Site</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		
		<?php wp_head(); ?>

	</head>

	<body>

		
		<nav>
    <div class="container">
        <a href="" class="navigation-brand pull-right">Logo<img src="" alt=""></a>
			<?php
				if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
			?>
            <ul class="navigation-list list-unstyled pull-left">
                <?php
					if ( has_nav_menu( 'primary' ) ) {

						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'primary',
							)
						);

					} elseif ( ! has_nav_menu( 'expanded' ) ) {

						wp_list_pages(
							array(
								'match_menu_classes' => true,
								'show_sub_menu_icons' => true,
								'title_li' => false,
								'walker'   => new TwentyTwenty_Walker_Page(),
							)
						);

					}
				?>
            </ul>
				<?php }?>
        <button class=" toggle">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>
        <div class="overlay">
        </div>
	</div>
		
		

					
		<?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );
