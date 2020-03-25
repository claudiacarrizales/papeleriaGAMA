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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '9dd83ec8509f0170d84160b366d1d87de19ecb5f90d0b0ef' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/k r&*uL0*u#Sli^aNR<qz2dL--z}vO$-zu4UWpm][?`bWcOsBZqYi<lQ2xJYvh(' );
define( 'SECURE_AUTH_KEY',  'V!@<zFV,Chc}$r(36! ?#3%o:fMyq9bI+#uxfwo=DOF)hMU R Sf dgA5Fi:r>=Y' );
define( 'LOGGED_IN_KEY',    ':rz8VvEpm;+,,~BMKFUC<p/7S(a*2xSQRiTuw RZ/;D5o)|yyVm|Ou8m3eZJ7UCI' );
define( 'NONCE_KEY',        '}$2Hx3wBRp nbXH#d5an]pdO}GpdN2&kv4b6L8jg?4JKnXT8!B,&Jf4)d!d*W0Fg' );
define( 'AUTH_SALT',        ' ^*p`0he,}gNc8MlX,$cIJ&`0!3Z$^Tr.=.FZV:JdISh&>KGiT>:lIb^{p`8HL{h' );
define( 'SECURE_AUTH_SALT', 'zErS#`Cw2|>p$^QYt/9``o~?R1MI40kU_9n*wS&,2`UG|zV9Hi$7fsR4/44m;cvt' );
define( 'LOGGED_IN_SALT',   'U=`oM&$5nv;^yp%t7WCoQ%_s;rXB>10O>_t32!Cw~d=Ks5=68*/^jC+i%mMZ4Auf' );
define( 'NONCE_SALT',       'XHI.E0i`a$Q+zEmx,&xaZrE&H!t1{J?.U}`--Lmb]BpZ&2d`3BhN)a}e|G-4TOvD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
