<?php
/**
 * Template Name: Cloud Template
 *
 *
 * @package understrap
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<?php
		if( have_rows('layouts') ):
     // loop through the rows of data
	    	while ( have_rows('layouts') ) : the_row();
					get_template_part( 'layouts/layout', 'cloud' );
	    	endwhile;
		else :
    	// no layouts found
		endif; ?>
		</div>
	</div>
</div>


<?php
get_footer();
