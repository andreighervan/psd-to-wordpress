<?php
$photo_1 = get_field('photo_1');
$photo_2 = get_field('photo_2');
$photo_3 = get_field('photo_3');
$photo_4 = get_field('photo_4');
$photo_5 = get_field('photo_5');
$photo_6 = get_field('photo_6');
$photo_7 = get_field('photo_7');
$photo_8 = get_field('photo_8');
?>


<!-------- GALLERY ------>
<section id="gallery">
    <div class="container">
        <div class="gallery">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="container-2">
                        <div class="pull-left">
                            <p>OUR WORK IN PICTURES</p>
                            <h2 class="inline">GALLERY</h2>
                        </div>
                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs pull-right inline tab-gallery" role="tablist">
                                <li role="presentation" class="active all" ><a href="#all" aria-controls="all" role="tab"
                                                                               data-toggle="tab" >ALL</a></li>
                                <li role="presentation"><a href="#recentprojects" aria-controls="recentprojects"
                                                           role="tab" data-toggle="tab">RECENT PROJECTS</a></li>
                            </ul>
<div style="clear: both;"></div>
                            <!-- Tab panes -->
                            <div class="tab-content clearfix">
                                <div role="tabpanel" class="tab-pane active" id="all">
                                    <div class="grid">
                                        <div class="grid-sizer grid-item--height2 grid-block fade-1"></div>
                                        <div class="thumb grid-item blue grid-block fade-1">
                                            <img src="<?php echo $photo_1['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_1['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"> <i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumb grid-item grid-item--height2 blue grid-block fade-1">
                                            <img src="<?php echo $photo_2['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_2['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"> <i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="thumb grid-item grid-block fade-1">
                                            <img src="<?php echo $photo_3['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_3['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"><i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="thumb grid-item grid-item--height2 grid-block fade-1">
                                            <img src="<?php echo $photo_4['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_4['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"><i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="thumb grid-item grid-item--height2 grid-block fade-1">
                                            <img src="<?php echo $photo_5['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_5['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"><i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumb grid-item grid-item--height2 grid-block fade-1">
                                            <img src="<?php echo $photo_6['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_6['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"><i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumb grid-item grid-block fade-1">
                                            <img src="<?php echo $photo_7['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_7['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"><i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumb grid-item grid-block fade-1">
                                            <img src="<?php echo $photo_8['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_8['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"><i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="recentprojects">
                                    <div class="grid">
                                        <div class="grid-sizer grid-item--height2 grid-block fade-1"></div>
                                        <div class="thumb grid-item blue grid-block fade-1">
                                            <img src="<?php echo $photo_1['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_1['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"> <i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="thumb grid-item grid-item--height2 blue grid-block fade-1">
                                            <img src="<?php echo $photo_2['url']; ?>" class="cls4"/>
                                            <div>
                                                <a href="<?php echo $photo_2['url']; ?>"
                                                   data-title="My image 3" data-lightbox="gallery"> <i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container-2">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="pull-right see-gallery">
                            <a href="<?php echo $photo_1['url']; ?>" data-lightbox="gallery"><h5>SEE GALLERY <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

