<?php 
	get_header();
?>
<div class="container">
<div class="content">
  <?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/content', 'content' );
		}
	}

	?>
</div>

<?php get_template_part( 'template-parts/pagination' ); ?>
</div>




<?php
get_footer();
