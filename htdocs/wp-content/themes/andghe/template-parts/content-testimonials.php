<!-------- TESTIMONIALS ------>
<section id="testimonials">
    <div class="container">
        <div class="row">
            <?php $loop = new WP_Query(array('post_type' => 'testimonials', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
            <?php while ($loop->have_posts()):$loop->the_post(); ?>

                <div class="col-sm-6 col-lg-5 col-md-5 col-lg-push-1 col-md-push-1 testimonial">
                    <div class="media">
                        <div class="media-left center testimonial-left">
                            <div class="author-image">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?>
                            </div>
                            <h6><?php the_excerpt(); ?></h6>
                            <img src="<?php bloginfo('stylesheet_directory');?>/img/testimonials/stars.png" class="star">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php the_title(); ?></h4>
                           <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
</section>