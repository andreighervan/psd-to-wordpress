<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php wp_title();?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-------- TOP HEADER ------>
<section id="top-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="pull-left">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i><?php $header_options = (array)get_option('header_options'); ?>
                    <?php
                    if(isset($header_options['email_header'])){
                        $email_header = $header_options['email_header'];} ?>
                    <?php if( 0 < strlen( trim( isset($header_options['email_header']) ) ) ) { ?>
                        <?php echo $email_header; ?>
                    <?php } // end if ?>  <i
                        class="fa fa-map-marker" aria-hidden="true"></i> <?php $header_options = (array)get_option('header_options'); ?>
                    <?php
                    if(isset($header_options['location_header'])){
                        $location_header = $header_options['location_header']; }?>
                    <?php if( 0 < strlen( trim( isset($header_options['location_header'] )) ) ) { ?>
                        <?php echo $location_header; ?>
                    <?php } // end if ?>
                </div>
                <div class="pull-right">
                    <i class="fa fa-phone" aria-hidden="true"></i> <?php $header_options = (array)get_option('header_options'); ?>
                    <?php
                    if(isset($header_options['phone_header'])){
                        $phone_header = $header_options['phone_header'];} ?>
                    <?php if( 0 < strlen( trim( isset($header_options['phone_header'] ) )) ) { ?>
                        <?php echo $phone_header; ?>
                    <?php } // end if ?>
                </div>
            </div>
        </div>
    </div>
</section>
<header>
    <div class="container">
        <div class="row">
            <div class="nav-wrapper">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                            data-target="#right-navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo esc_url( home_url( '/' ) );?>" class="navbar-brand"><?php the_custom_logo(); ?></a>
                </div>
                <nav class="collapse navbar-collapse right-navigation" id="right-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => 'nav',
                        'menu_class' => 'nav navbar-nav navbar-right nav-top'
                    )); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
