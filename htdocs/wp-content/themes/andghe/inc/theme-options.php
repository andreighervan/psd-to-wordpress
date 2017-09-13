<?php
/*-----------------------------------------------*
* Menus
/*-----------------------------------------------*

/**
* Adds the 'agv Theme Options' to the 'Settings' menu in the WordPress
* Dashboard.
*/
function agv_add_options_page() {

// Introduces a new top-level menu page
add_menu_page(
'Theme Options',			// The text to be displayed in the browser title bar
'Theme Options',					// The text to be used for the menu
'manage_options',				// The required capability of users to access this menu
'agv-theme-options',			// The slug by which this menu item is accessible
'agv_theme_options_display'	// The name of the function used to display the page content
);

// Introduce a submenu page specifically for the header options
add_submenu_page(
'agv-theme-options',
'Header Options',
'Header Options',
'manage_options',
'header-options',
'agv_theme_options_display'
);

// Introduce a submenu page specifically for the footer options
add_submenu_page(
'agv-theme-options',
'Footer Options',
'Footer Options',
'manage_options',
'footer-options',
'agv_theme_options_display'
);

} // end agv_add_options_page
add_action( 'admin_menu', 'agv_add_options_page' );

/*-----------------------------------------------*
* Sections, Settings, and Fields
/*-----------------------------------------------*

/**
* Registers a new settings field on the 'General Settings' page of the WordPress dashboard.
*/
function agv_initialize_theme_options() {

// Let's introduce a section for the header options
add_settings_section(
'header_section',
'Header Options',
'agv_theme_header_description_display',
'agv-theme-header-options'
);

// Let's introduce a section for the footer options
add_settings_field(
'email_header',
'Header Email',
'agv_header_email_display',
'agv-theme-header-options',
'header_section'
);
add_settings_field(
'location_header',
'Header Location',
'agv_header_location_display',
'agv-theme-header-options',
'header_section'
);
add_settings_field(
'phone_header',
'Header Phone',
'agv_header_phone_display',
'agv-theme-header-options',
'header_section'
);
// Let's introduce a section to be rendered on the new options page
add_settings_section(
'footer_section',							// The ID to use for this section in attribute tags
'Footer Options',							// The title of the section rendered to the screen
'agv_theme_footer_description_display',	// The function used to render the options for this section
'agv-theme-footer-options'					// The ID of the page on which this section is rendered
);

// Define the settings field
add_settings_field(
'footer_phone', 					// The ID (or the name) of the field
'Footer Phone', 			// The text used to label the field
'agv_footer_phone_display', 		// The callback function used to render the field
'agv-theme-footer-options',		// The page on which we'll be rendering this field
'footer_section'					// The section to which we're adding the setting
);
add_settings_field(
'footer_email', 					// The ID (or the name) of the field
'Footer Email', 			// The text used to label the field
'agv_footer_email_display', 		// The callback function used to render the field
'agv-theme-footer-options',		// The page on which we'll be rendering this field
'footer_section'					// The section to which we're adding the setting
);

add_settings_field(
'footer_facebook', 					// The ID (or the name) of the field
'Facebook Footer', 			// The text used to label the field
'agv_facebook_footer', 		// The callback function used to render the field
'agv-theme-footer-options',		// The page on which we'll be rendering this field
'footer_section'					// The section to which we're adding the setting
);
add_settings_field(
'footer_twitter', 					// The ID (or the name) of the field
'Twitter Footer', 			// The text used to label the field
'agv_twitter_footer', 		// The callback function used to render the field
'agv-theme-footer-options',		// The page on which we'll be rendering this field
'footer_section'					// The section to which we're adding the setting
);
add_settings_field(
'footer_google_plus', 					// The ID (or the name) of the field
'Google Plus Footer', 			// The text used to label the field
'agv_google_plus_footer', 		// The callback function used to render the field
'agv-theme-footer-options',		// The page on which we'll be rendering this field
'footer_section'					// The section to which we're adding the setting
);

// Register the settings for the header section
register_setting(
'header_section',
'header_options'
);

// Register the 'footer_message' setting with the 'General' section
register_setting(
'footer_section',					// The name of the group of settings
'footer_options'					// The name of the actual option (or setting)
);

} // end agv_initialize_theme_options
add_action( 'admin_init', 'agv_initialize_theme_options' );

/*-----------------------------------------------*
* Callbacks
/*-----------------------------------------------*

/**
* Renders the content of the options page for both the header and footer options.
*/
function agv_theme_options_display() {
?>
<div class="wrap">
    <div id="icon-options-general" class="icon32"></div>
    <h2>agv Theme Options</h2>

    <?php settings_errors(); ?>

    <?php if( isset( $_GET[ 'page' ] ) ) {
        $active_tab = $_GET[ 'page' ];
    } else if( $active_tab == 'header-options' ) {
        $active_tab = 'header-options';
    } else if( $active_tab == 'footer-options' ) {
        $active_tab = 'footer-options';
    } else {
        $active_tab = 'header-options';
    } // end if/else ?>

    <h2 class="nav-tab-wrapper">
        <a href="?page=header-options" class="nav-tab <?php echo 'header-options' == $active_tab || 'agv-theme-options' == $active_tab ? 'nav-tab-active' : ''; ?>"><?php _e( 'Header Options', 'sandbox' ); ?></a>
        <a href="?page=footer-options" class="nav-tab <?php echo $active_tab == 'footer-options' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Footer Options', 'sandbox' ); ?></a>
    </h2>

    <form method="post" action="options.php">
        <?php

        if( 'footer-options' == $active_tab ) {

            settings_fields( 'footer_section' );
            do_settings_sections( 'agv-theme-footer-options' );

        } else {

            settings_fields( 'header_section' );
            do_settings_sections( 'agv-theme-header-options' );

        } // end if/else

        // Add the submit button to serialize the options
        submit_button();

        ?>
    </form>
</div><!-- /.wrap -->
<?php
} // end agv_theme_options_display

/**
 * Renders the input field for the 'Header Display' setting.
 */
function agv_header_phone_display() {

    // Read the options for the footer message section

    $options = (array)get_option( 'header_options' );
    if(isset($options['phone_header'])) {
        $phone_header = $options['phone_header'];
    }

    echo '<input type="text" name="header_options[phone_header]" id="header_options[value]" value="' . $phone_header   . '" />';

} // end agv_footer_phone_display
function agv_header_location_display() {

    // Read the options for the footer message section

    $options_header = (array)get_option( 'header_options' );
    if(isset($options_header['location_header'])) {
        $location_header = $options_header['location_header'];
    }

    echo '<input type="text" name="header_options[location_header]" id="header_options[value]" value="' . $location_header . '" />';

} // end agv_footer_phone_display
function agv_header_email_display() {

    // Read the options for the footer message section

    $options_header = (array)get_option( 'header_options' );
    if(isset($options_header['email_header'])) {
        $email_header = $options_header['email_header'];
    }

    echo '<input type="text" name="header_options[email_header]" id="header_options[value]" value="' .$email_header . '" />';

} // end agv_footer_phone_display

/**
 * Renders the description of the setting below the title of the header section
 * and the above the actual settings.
 */
function agv_theme_header_description_display() {
    echo "These options are designed to help you change the header information.";
} // end agv_header_text_display

/**
 * Renders the description of the setting below the title of the footer section
 * and the above the actual settings.
 */
function agv_theme_footer_description_display() {
    echo "These options are designed to help you control what's displayed in your footer.";
} // end agv_footer_options_display

/**
 * Renders the input field for the 'Footer Message' setting.
 */
function agv_footer_phone_display() {

    // Read the options for the footer message section

    $options = (array)get_option( 'footer_options' );
    if(isset($options['phone'])) {
        $phone = $options['phone'];
    }

    echo '<input type="text" name="footer_options[phone]" id="footer_options[value]" value="' .$phone. '" />';

} // end agv_footer_phone_display
function agv_footer_email_display() {

    // Read the options for the footer message section

    $options = (array)get_option( 'footer_options' );
    if(isset($options['email'])) {
        $email = $options['email'];
    }

    echo '<input type="text" name="footer_options[email]" id="footer_options[value]" value="' . $email . '" />';

} // end agv_footer_email_display
//SOCIAL MEDIA FOOTER

function agv_facebook_footer() {

    // Read the options for the footer message section

    $options = (array)get_option( 'footer_options' );
    if(isset($options['facebook_footer'])) {
        $facebook_footer = $options['facebook_footer'];
    }

    echo '<input type="text" name="footer_options[facebook_footer]" id="footer_options[value]" value="' . $facebook_footer  . '" />';

} // end agv_footer_email_display
function agv_twitter_footer() {

    // Read the options for the footer message section

    $options = (array)get_option( 'footer_options' );
    if(isset($options['twitter_footer'])) {
        $twitter_footer = $options['twitter_footer'];
    }

    echo '<input type="text" name="footer_options[twitter_footer]" id="footer_options[value]" value="' . $twitter_footer  . '" />';

} // end agv_footer_email_display
function agv_google_plus_footer() {

    // Read the options for the footer message section

    $options = (array)get_option( 'footer_options' );
    if(isset($options['google_plus_footer'])) {
        $google_plus_footer = $options['google_plus_footer'];
    }

    echo '<input type="text" name="footer_options[google_plus_footer]" id="footer_options[value]" value="' . $google_plus_footer  . '" />';

} // end agv_footer_email_display
function mytheme_setup() {
    add_theme_support('custom-logo', array(
        'size' => 'mytheme-logo'
    ));
}

add_action('after_setup_theme', 'mytheme_setup');

