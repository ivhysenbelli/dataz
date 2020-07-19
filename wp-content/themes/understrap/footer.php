<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

            <div class="col-lg-6">
                <h3><?php the_field('column_title', 'options'); ?></h3>
                <div class="contact-data">
                    <?php the_field('contact_data', 'options'); ?>
                </div>
                <div class="contact-button">
                    <a class="button" href="#" data-toggle="modal" data-target="<?php the_field('footer_button_url', 'options'); ?>"><?php the_field('footer_button_title','options') ?></a>
                </div>
            </div><!--col end -->

			<div class="col-lg-6">
                <div class="social-links">
                    <h3><?php the_field('social_links_title','options') ?></h3>
                    <?php while(have_rows('social_links','options')): the_row(); ?>
                        <a href="<?php the_sub_field('icon_url','options') ?>"><i class="fa fa-<?php the_sub_field('icon_name','options'); ?>"></i></a>
                    <?php endwhile; ?>
                </div>
                <div class="subscribe">
                    <h3><?php the_field('subscribe_title','options'); ?></h3>
                    <?php $subscribeFormID = get_field('subscribe_form_id','options'); ?>
                    <?php $subscribeFormName = get_field('subscribe_form_name','options'); ?>
                    <div class="subscribe-form">
                        <?php echo do_shortcode( '[contact-form-7 id="'.$subscribeFormID.'" title="'.$subscribeFormName.'"]' ); ?>
                    </div>
                </div>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<div class="fixed-contact-form">
    <a class="button" data-toggle="modal" href="#" data-target="<?php the_field('footer_button_url','options') ?>"><?php the_field('fixed_form_button_title','options') ?></a>
</div>

    <!-- Modal -->
<div class="modal fade custom-modal" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><?php the_field('fixed_form_button_title','options') ?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-close"></i>
        </button>
      </div>
      <div class="modal-body">
        <?php $fixedFormID = get_field('fixed_form_id','options'); ?>
        <?php $fixedFormName = get_field('fixed_form_name','options'); ?>
        <div class="subscribe-form">
            <?php echo do_shortcode( '[contact-form-7 id="'.$fixedFormID.'" title="'.$fixedFormName.'"]' ); ?>
        </div>

      </div>
    </div>
  </div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

