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
</div>




<?php
get_footer();
