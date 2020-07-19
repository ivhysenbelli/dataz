<section class="section section-services">
	<div class="container">
		<div class="row">
			<?php if(have_rows('services')): ?>
				<?php while(have_rows('services')) : the_row(); ?>
					<div class="row single-service slide-up">
						<div class="col-lg-6">
							<div class="data">
								<h2 class="title"><?php the_sub_field('section_title'); ?></h2>
								<p class="description"><?php the_sub_field('section_description'); ?></p>
							</div>
							<?php if(!empty(get_sub_field('button_link'))): ?>
							<div class="buttons-row">
								<a href="<?php the_sub_field('button_url') ?>" class="button"><?php the_sub_field('button_link') ?></a>
							</div>
							<?php endif; ?>
							<?php $extraInfo = get_sub_field_object('show_extra_info'); ?>
							<?php if($extraInfo['value'] == true): ?>
								<div class="extra-info">
									<ul class="clients-list">
									<?php while(have_rows('extra_info')): the_row(); ?>
										<li><?php the_sub_field('clients') ?></li>
									<?php endwhile; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
						<div class="col-lg-6 img-col">
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image['url']; ?>" alt="">
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>