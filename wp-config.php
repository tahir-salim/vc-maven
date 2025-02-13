<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vc-maven' );

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
define( 'AUTH_KEY',         'CNt1ih a]W~5t6DY<WW9l!a|[mo/PM@p}avEju.sS+L:wlQiy4L?]z6|2/m`R]os' );
define( 'SECURE_AUTH_KEY',  'mdjT[+-;D=6k:3;(!z,JA;0FDms>D60)Nu.^/z4,8?oY-_V9x6LS_T=%9aK*r?i^' );
define( 'LOGGED_IN_KEY',    'turgY<_?|,6Zt)r#wX*IQ9CGiZ|Zfip6gKTi}4JrZm10K2 ?pbcC&PFAP}+TZF5s' );
define( 'NONCE_KEY',        'qQYF}YGn-aJO66rQhPsm3W.(f#D,V1N#JvzFwMn`pd-&HB4Ket9_88PF09;0E~QA' );
define( 'AUTH_SALT',        'bw+_JeAo4H]a0 v>MX~6h;bSZ1~ x_(RwpprgG>v=jzIXjt{GM)KBfd}YPDmXxjp' );
define( 'SECURE_AUTH_SALT', 'cNdr%lWU8=Q-=Uq9oHeRf}77D_(M(c LX>~h;DljdQeZLOlU$c*s)[Dly:=key:]' );
define( 'LOGGED_IN_SALT',   'w%AMJ#?B EF~8$OcS+8-c$Bm*eP}UF<OJ*{:P^S.;_){HP%;M=)=D_WuE-NMe/y]' );
define( 'NONCE_SALT',       'jdwF``d09};ozE[uLSe;)zO.:;~209C#ua;>K*piu ho5miY7e*(-=[%*>H6iATa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
