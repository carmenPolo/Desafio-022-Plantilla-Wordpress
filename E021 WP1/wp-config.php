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
define( 'DB_NAME', 'E021 WP1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'A#Y1FQ0_Jkwlg-Y/ckFvA)SduP~`AV]g;M(|lw7zkDf7q(m;yrdwLfe^p2&uOEi)' );
define( 'SECURE_AUTH_KEY',  '(s;TBKts*`(j6wpyeUxX)uzwP(nGP2<_$D~nAXwz`Nh4!bJ$R+u0eITmEK1HG7Fq' );
define( 'LOGGED_IN_KEY',    'xL8(-RCfva`wuWdtJGAuMJvO0n`jrYTe(( UlK};@9 (vkqQ oYkEzoZpzJ[Oahl' );
define( 'NONCE_KEY',        '*j YqdCZG5|*=(#wT*m<#N>a pM^bR9gmfy0yZrI7y:zDfECySw[`T1k&}^Ni$Y<' );
define( 'AUTH_SALT',        '7(`!_=Z7zt&gz]St>xJE+Iq-kN(c3xp1gAOf hx%h8(|@+vvd3PtcPe|e)-x/Bu)' );
define( 'SECURE_AUTH_SALT', ']YgC6732VEdxIT+5KX`;2sX,#V]%-Ct(?_z,|CI^cEx$x%swWSqo{D`<DvwTs -j' );
define( 'LOGGED_IN_SALT',   'RkNx$Hh[}Bkt1x2Cehn*VnK3bB&N%k O:udcgj2fmAg4K|12XKh^/4!6|E?+Y2I0' );
define( 'NONCE_SALT',       'i84|&MxF/~u1tm>exOU{2PX}B[~m*z~8zP3i0<bbn:JhJ]};6]C}XD~p$aRy%;Q?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dl_';

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
