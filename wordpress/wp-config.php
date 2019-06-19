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
define( 'DB_NAME', 'jadeboutique' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'dv)X!{BATDdfECQtMJjE)3.@a/Sg,s *~Gm6^ECi8$7f/XuyciC5AERf8+B@HS&G' );
define( 'SECURE_AUTH_KEY',  'G2d(#ytHz3i;<4+*}bqO/i_{53%Jb9TQedw|:-0([GXE(&:2?(n,]PVdPxmRiUn:' );
define( 'LOGGED_IN_KEY',    '[2CXtJ.Zzd{%vUgV(_CT$+Z:-e-82dl_QA60It^+Y~ox7+,Q!RZV92W3PAUD:[Xj' );
define( 'NONCE_KEY',        'Hn/3Ar)KnnZ.4Im)VJhCeLKd<__n1&,E@=j!3C;Cs4 -3*0%2@_u9 iUbM>*-;m7' );
define( 'AUTH_SALT',        ';l[-BqmQQdm3Q>LZj6myxr3*=2yuzF>F^9mz({@u#`CF5V3E&;(F-ia1w5S9({bz' );
define( 'SECURE_AUTH_SALT', '@U!u2Qza?Tz3%O<>ki9F^/b!2.PdMHI$[lcy9PF05rt~;yEg8)k/>9[hJsj%S#oh' );
define( 'LOGGED_IN_SALT',   'q)$wf2I9q#1|T5b]jfi+#9Id&TG];]?Kh~eY XH#0*>DqLkL}S<6#Fn(pVQ9&y`#' );
define( 'NONCE_SALT',       'l>;82vL/e#qqZ0<HN*1QEt@Sdiz!G}86G3z+:AuL{XCIf=j`0w|`$7a@CS`+EN%S' );

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
