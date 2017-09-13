<?php
$slide_one_title_top=get_field('slide_one_title_top');
$slide_title_1 = get_field('slide_title_1');
$slide_content_1 = get_field('slide_content_1');
$slide_button_url_1 = get_field('slide_button_url_1');
$image_1 = get_field('image_1');
$slide_two_title_top=get_field('slide_two_title_top');
$slide_title_2 = get_field('slide_title_2');
$slide_content_2 = get_field('slide_content_2');
$slide_button_url_2 = get_field('slide_button_url_2');
$image_2 = get_field('image_2');
$slide_three_title_top=get_field('slide_three_title_top');
$slide_title_3 = get_field('slide_title_3');
$slide_content_3 = get_field('slide_content_3');
$slide_button_url_3 = get_field('slide_button_url_3');
$image_3 = get_field('image_3');
$slide_four_title_top=get_field('slide_four_title_top');
$slide_title_4 = get_field('slide_title_4');
$slide_content_4 = get_field('slide_content_4');
$slide_button_url_4 = get_field('slide_button_url_4');
$image_4 = get_field('image_4');
?>

<!-------- SLIDE ------>

<section id="slide">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-numbers">
                        <li data-target="#myCarousel" data-slide-to="0" class="active">01</li>
                        <li data-target="#myCarousel" data-slide-to="1">02</li>
                        <li data-target="#myCarousel" data-slide-to="2">03</li>
                        <li data-target="#myCarousel" data-slide-to="3">04</li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt']; ?>">
                            <div class="carousel-caption">
                                <p><?php echo $slide_one_title_top;?></p>
                                <h1 class="fadeIn animated wow"><?php echo $slide_title_1; ?></h1>
                                <h5 class="fadeIn animated wow"><?php echo $slide_content_1; ?></h5>
                                <div class="slide-btn fadeInDown animated wow"><a href="<?php echo $slide_button_url_1; ?>">SEE MORE <i class="fa fa-long-arrow-right"
                                                                                                                aria-hidden="true"></i></a></div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt']; ?>">
                            <div class="carousel-caption">
                                <p><?php echo $slide_two_title_top;?></p>
                                <h1 class="fadeIn animated wow"><?php echo $slide_title_2; ?></h1>
                                <h5 class="fadeIn animated wow"><?php echo $slide_content_2; ?></h5>
                                <div class="slide-btn fadeInDown animated wow"><a href="<?php echo $slide_button_url_2; ?>">SEE MORE <i class="fa fa-long-arrow-right"
                                                                                                                aria-hidden="true"></i></a></div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="<?php echo $image_3['url']; ?>" alt="<?php echo $image_3['alt']; ?>">
                            <div class="carousel-caption">
                                <p><?php echo $slide_three_title_top;?></p>
                                <h1 class="fadeIn animated wow"><?php echo $slide_title_3; ?></h1>
                                <h5 class="fadeIn animated wow"><?php echo $slide_content_3; ?></h5>
                                <div class="slide-btn fadeInDown animated wow"><a href="<?php echo $slide_button_url_3; ?>">SEE MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="<?php echo $image_4['url']; ?>" alt="<?php echo $image_4['alt']; ?>">
                            <div class="carousel-caption">
                                <p><?php echo $slide_four_title_top;?></p>
                                <h1 class="fadeIn animated wow"><?php echo $slide_title_4; ?></h1>
                                <h5 class="fadeIn animated wow"><?php echo $slide_content_4; ?></h5>
                                <div class="slide-btn fadeInDown animated wow"><a href="<?php echo $slide_button_url_4; ?>">SEE MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------- AFTER SLIDE ------>

<section id="after-slide">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="inline align-left">
                    <button type="button"><i class="fa fa-phone" aria-hidden="true"></i> CALL US NOW</button>
                </div>
                <div class="down-arrow inline"><a href="#services"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>
                <div class="inline align-right">
                    <button type="button"><i class="fa fa-envelope-o" aria-hidden="true"></i> GET A QUOTE</button>
                </div>
            </div>
        </div>
    </div>
</section>