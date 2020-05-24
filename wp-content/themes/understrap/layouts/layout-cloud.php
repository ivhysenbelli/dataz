<?php
if( have_rows('all_layouts') ):
	// loop through the rows of data
	while ( have_rows('all_layouts') ) : the_row();
		
		if( get_row_layout() == 'section_main_banner' ):
			get_template_part( 'sections/section', 'main-banner' );
		endif;
		if( get_row_layout() == 'section_text' ):
			get_template_part( 'sections/section', 'text' );
		endif;
		if( get_row_layout() == 'section_services' ):
			get_template_part( 'sections/section', 'services' );
		endif;
		if( get_row_layout() == 'section_testimonials' ):
			get_template_part( 'sections/section', 'testimonials' );
		endif;
		if( get_row_layout() == 'section_clients' ):
			get_template_part( 'sections/section', 'clients' );
		endif;
		
	endwhile;
endif;