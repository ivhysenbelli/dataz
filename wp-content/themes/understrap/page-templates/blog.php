<?php
/**
 * Template Name: Blog Posts
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="wrapper" id="blog-page-wrapper">

    <div class="container">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">
                    <div class="container">
                        <div class="row">
                          <?php 
                        $args = array(
                            'post_type' => 'post', 
                        );
                        // The Query
                        $query = new WP_Query($args);
                         
                        // The Loop
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <div class="col-md-6 col-lg-6 single-blog-item">
                                <div class="title">
                                    <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                                    <h2><?php echo get_the_title( $query->post->ID ) ?></h2>
                                </div>
                                <div class="image">
                                    <?php $image = get_the_post_thumbnail_url($query->post->ID, 'full') ?>
                                    <img src="<?php echo $image ?>" alt="">
                                </div>
                                <div class="button-row">
                                    <a class="button" href="<?php the_permalink($query->posty->ID) ?>" class="button">Read More</a>
                                </div>
                            </div>
                            <?php }
                            wp_reset_postdata();

                        ?>  
                        </div>
                    </div>
                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
