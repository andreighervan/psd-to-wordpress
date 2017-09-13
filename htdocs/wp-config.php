<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'b10_20042840_angups');

/** MySQL database username */
define('DB_USER', 'b10_20042840');

/** MySQL database password */
define('DB_PASSWORD', '123QQmilan');

/** MySQL hostname */
define('DB_HOST', 'sql108.byethost10.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-Qj*fPR<#a`w,N#-!UIOf%0Z?3nn-{KWv~#>iS>wt|E{~7:v`|}}FvBlEg|R#^3p');
define('SECURE_AUTH_KEY',  'V^yH3ky@#>9a9?P}@oE IYV6S9q.AiHcv0;lQR?>.*^Hs/^;/f?fg);Uko8q[6@J');
define('LOGGED_IN_KEY',    '/Chx-W1XveThYh>&G.PDnoLIx unKPrQg3;{j03zf>8U-WFV`!D4=0xoU1WEh+l}');
define('NONCE_KEY',        'pQ(QS0vW?2vIGaIzX1`K[dXGk3BrPh&P3+5Lsenr7&>$lnxV]s5x, I;m7{|o3!%');
define('AUTH_SALT',        'a/S<x<uld4zP5Go8(RK;Brbm58bg<U1}u.zCM/I|18v@[wDeu9eS,A3REy,Hvt{E');
define('SECURE_AUTH_SALT', '35G_VM_DMW<8Vnu*gm[eh;)gD6GWZ2Kewhs^lalG3Y#sTU!R^x:zAPD4=F:gW^cF');
define('LOGGED_IN_SALT',   'aO0_$m_(]S[sa/XFHzRAQb>J?8@{nO;PrK&t45:`ChO> m3sN):30./W9ah&.H-I');
define('NONCE_SALT',       'NVpOxrUMZ:,@@CG|3xm,;yRaSsslM}F_-K{WZdEx29_p/dzP%%`-?E,HtnLN0R:c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
