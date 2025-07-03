<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lotusoutreach_db' );

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
define( 'AUTH_KEY',         '8khOe{JJ@2nppc8e<q]*xk6_OHm3pdl#WMnjUq<?#ewX`rNJ6B&+?tZuPl:d<i44' );
define( 'SECURE_AUTH_KEY',  'ZPg!=aXZRQXJAJQ<& v0Jig<q}#_#vEMYH9n`jXOhtO)Wg),E+YBC*;ATwmL=[Oe' );
define( 'LOGGED_IN_KEY',    '$FA52.jMfo]7LVwAB $jnG&7*7C3TjnqbL)c#|Jj0Lv77;m}Q>bo~D1j7m6)!hu]' );
define( 'NONCE_KEY',        '4/Ty#de2(,RSU7q/<}Ewrh8r`vxadT>(E=urrLC05-:]:nIOK@>>IbOW0J]iw7Q?' );
define( 'AUTH_SALT',        'Uv79F}$~N$2O,vphA>Wk8coMj({SA/C0cuFnP7Gw`~ZTx7v>GD=-AoWIlEE+t4sH' );
define( 'SECURE_AUTH_SALT', '1`&rDk@9eu6;itLlA_6R6H~+X3Uj@fj5=>gporh/o|d0]E~isq/w@N?r9G@mzLCZ' );
define( 'LOGGED_IN_SALT',   't|nb|mMYlwe+hAH794V`8zH(Qvu&TZ~#!M&kAOi5j153{:wr1)A@srm64NHVa{KN' );
define( 'NONCE_SALT',       '-|8E}yNBn8/NiW<pOKS&H>8)`pWRO|aLoL?/Oc`oYg<o#p8;8MvsMyArAIO[2mjS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
