<?php $bannerImage = get_sub_field('background_image'); ?>
<?php $mainImage = get_sub_field('main_image');?>
<div class="section section-main-banner">
	<canvas class='particles-bg'></canvas>
	<div class="data">
		<?php if(!empty(get_sub_field('banner_title'))): ?>
			<h1><?php the_sub_field('banner_title'); ?></h1>
		<?php endif; ?>
	
		<?php if(!empty($mainImage)): ?>
			<img src="<?php echo $mainImage['url']; ?>" alt="">
		<?php endif;?>
	</div>
	<?php if(have_rows('buttons')): ?>
		<div class="buttons-row">
			<?php while (have_rows('buttons')): the_row(); ?>
				<a href="<?php the_sub_field('button_url'); ?>" class="button button-transparent"><?php the_sub_field('button_text'); ?></a>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>