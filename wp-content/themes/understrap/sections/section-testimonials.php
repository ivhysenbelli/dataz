<section class="section section-testimonials slide-up">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title">
					<h2><?php the_sub_field('section_title'); ?></h2>
				</div>
				<?php if(have_rows('tesimonials')): ?>
				<div class="testimonials-carousel">
					<div id="carouselTestimonials" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-inner">
						<?php $flag = true; ?>
						<?php while(have_rows('tesimonials')) : the_row(); ?>
						    <div class="carousel-item <?php if($flag == true){ echo "active";} ?>" >
						    	<?php $image = get_sub_field('client_logo'); ?>
						    	<div class="data">
						    		<div class="logo-image">
						    			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						    		</div>
						    		<div class="statistics">
						    			<?php while(have_rows('statistics')): the_row(); ?>
						    				<div class="single-stat">
												<span><?php the_sub_field('stat_title') ?></span>
							    				<p><?php the_sub_field('stat_value') ?></p>
						    				</div>
						    			<?php endwhile; ?>
						    		</div>
								</div>
							</div>
						<?php $flag = false; ?>
						<?php endwhile; ?>
						</div>
						<div class="navigation">
							<a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true">
							    	<i class="fa fa-chevron-left"></i>
							    </span>
							    <span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
						    	<span class="carousel-control-next-icon" aria-hidden="true">
						    		<i class="fa fa-chevron-right"></i>
						    	</span>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>