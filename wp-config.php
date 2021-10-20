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
define( 'WPCACHEHOME', '/home/clients/2bd96880adb40b6a2943e754574f8048/web/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('DB_NAME', 'be5qv_WP716926');

/** MySQL database username */
define('DB_USER', 'be5qv_WP716926');

/** MySQL database password */
define('DB_PASSWORD', 'KNJKEDKjPT');

/** MySQL hostname */
define('DB_HOST', 'be5qv.myd.infomaniak.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '(V-o:vgMS:ul<}Z4!C,_Z-dcu0*+cPmx7(SNp9YLfroSHF}3bm-Gg;6lJr&#^v)R');
define('SECURE_AUTH_KEY',  'h^730_k>:C+~8%Lw&K(WxZJwUBtq,diSDWl`5z:SC@:qoGrW?o_#Hk~bOo}a/veE');
define('LOGGED_IN_KEY',    'IoO)Ca_`}4GOae9t:cX>pkDiGXYsZY)H9dzP,Sm&Jqi.#i:CzY6mX>Vu^?>R0-Ox');
define('NONCE_KEY',        'NZvoV>>_pV)/z4NW0#!~`.9ml~O-pe*hbFuLkQI~5NNMX9Wb|#;vK/.k0G1,%t;Q');
define('AUTH_SALT',        '=wqmPIITG87N{>-Y0;X#mQ|Bb+%&-M(#XRVxGGC}yJbn5>fj-e~_1/S5AA~bGtd<');
define('SECURE_AUTH_SALT', '}kWo^pk.uoTh7r(`}AKPqIOd>24Rr-U&CA+>>oi!UPNX#fl0F=&WBi%hd_?up2v7');
define('LOGGED_IN_SALT',   '0},;snK|rbjJ&QcEzqlN.V>`j#tIN!=NhMMOV4PPH7W`)G>w#%A1v9P.^Jk*CmoJ');
define('NONCE_SALT',       ';fvg&x!U:RaFhvd9pce43pN^{`uNOo*)nG{CC>*n`k4}&*h=^Aq2d:HJmlZmNo.z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_716926_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
//define('WPLANG', 'fr_FR');

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
define('WP_DEBUG',          false);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
