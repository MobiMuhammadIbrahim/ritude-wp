<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ritude-live-db' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I6RzK^rz$-{e<^FF|UKg1qLSi$t7Y2]e#N_`EZv|V9= Hf<mc~CxJz0ET`$O?mmu');
define('SECURE_AUTH_KEY',  '^-WS5G-CG#1#Ac?JJ.0{QvBHIZStKiE[-kL|5m1#Ort+7d^e;:O+s@x)D|dr!WMh');
define('LOGGED_IN_KEY',    'Z%kCFpFhIQ$#XtKi76mMDzOGXm+&2[$+JEC=R4SM.L{Tum0:|bzw+s9yiAz-+Ae]');
define('NONCE_KEY',        '<%I+e:KMXtp51-d2fYh,^-NA|cV>u9{CZ~vQ5j+j@iHRi@CgbJ0y_qM.=L@e3G|S');
define('AUTH_SALT',        'Y`E].mA4;(.>#*]MU+R`Mm?6pstqU]b>9bsVg&cCB,>&1y!H3g5{6EO|vnS3LJ+)');
define('SECURE_AUTH_SALT', '&|&M-cJ|ThTHk)vL:?Rxk|TS+,GItsso0J0)Q$MI_tR/&!{U(Zf!GAL+ha+`[@xR');
define('LOGGED_IN_SALT',   '!%>nTu1S#q^/`Yt w>?bzpRb~,~~eso|WiO(fo|N5YWU|}o}VKzz~G7dJD8!DvZg');
define('NONCE_SALT',       '1s.p~_v)Vx5XcGpezb6NnO!F}Ia}?[Bm+F3i?Btg5s~Pnz{$,TR&|;rI|Y+3hS#>');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp9q_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define('FS_METHOD','direct');
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
