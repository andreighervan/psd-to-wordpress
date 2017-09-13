<!-------- SERVICES ------>
<section id="services">
    <div class="container">
        <div class="services">
            <div class="row fadeInLeft animated wow">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="container-2">
                        <p>WHAT WE DO</p>
                        <h2>SERVICES</h2>
                        <div class="pull-left"><p class="p-services">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt.</p></div>
                        <div class="pull-right arrows-services">
                            <a class="left-carousel recommended-item-control" href="#services-owl-carousel" data-slide="prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV
                            </a>
                            <a class="right-carousel recommended-item-control" href="#services-owl-carousel" data-slide="next">
                                NEXT&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-2">
                <div class="owl-carousel owl-theme fadeInLeft animated wow" id="services-owl-carousel">
                    <?php $loop = new WP_Query(array('post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                    <?php while ($loop->have_posts()):$loop->the_post(); ?>
                    <div class="item item-carousel">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                        <button type="button" onclick="window.location='<?php the_field('button_url_services');?>';">READ MORE <i class="fa fa-long-arrow-right"
                                                           aria-hidden="true"></i></button>
                    </div>
                <?php endwhile;
                wp_reset_query(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="container-2">
                        <div class="pull-right see-all-services">
                            <a href="http://angups.ga/services/" target="_blank"><h5>SEE ALL SERVICES <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>