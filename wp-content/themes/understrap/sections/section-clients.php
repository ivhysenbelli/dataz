<section class="section section-clients">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2><?php the_sub_field('section_title'); ?></h2>
					<p class="description"><?php the_sub_field('section_description') ?></p>
				</div>
				<div class="clients">
					<?php while(have_rows('clients')): the_row(); ?>
						<div class="single-client">
							<?php $image = get_sub_field('clients_logo') ?>
							<img src="<?php echo $image['url']; ?>" alt="">	
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>