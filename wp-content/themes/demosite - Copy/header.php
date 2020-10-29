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
            <ul class="navigation-list list-unstyled pull-left">
                <li><a href="">fadi</a></li>
                <li><a href="">subri</a></li>
                <li><a href="">quader</a></li>
                <li><a href="">fadi</a></li>
                <li><a href="">qua</a></li>
            </ul>
        <button class=" toggle">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>
        <div class="overlay">
        </div>
    </div>
</nav>
		<?php
		// Output the menu modal.
		// get_template_part( 'template-parts/modal-menu' );
