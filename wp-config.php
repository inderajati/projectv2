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
define( 'DB_NAME', 'projectv2' );

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
define( 'AUTH_KEY',         ':YIusv}a8[(D8QQFvFewbmNmY|mZUcn*y_J|vgBapMd#ApDMG<m.yfXE5V9%5{Yv' );
define( 'SECURE_AUTH_KEY',  '|FMh NEuUkeL!Us6.3tN+up2C`w<54 #>^i2~B^?enFq(9OrAUOn!Z8xI 3e<x_o' );
define( 'LOGGED_IN_KEY',    'UYTwj[*wjb|nsmofQTjT#_78jpO V*x`:2&ZJTgYzl<:GYGhtBt*?X %EY3`b@a$' );
define( 'NONCE_KEY',        '(>N#9k+u~|+.#u|~$@~:|@HZP+]vi<IS3HM.n_sV6;kA.OY{)p4QQb(a5b+wm@-o' );
define( 'AUTH_SALT',        '#dxg|NT}/H+7rAzP2H+~ugOGZw^bpj; I(&dL,JVulxIfA#.DOeIPqT>`o<%cahg' );
define( 'SECURE_AUTH_SALT', '@Ls7nrdWKiML$!>WWm9>t!<:;tztWE|h$<3E-T_6S*UHq^*BE2zWAku1Hd>xAV,?' );
define( 'LOGGED_IN_SALT',   'g#(A|nN}Ulr`KeX)WN]wE^qt.Mwn>ZnG$U e$a*:L(__jV~o3hh#D)Z%_dT9Xq*Q' );
define( 'NONCE_SALT',       'Mc&#a2d|%,?pvfg{hj{b*jkS*k5y}^X`Dw7s^)Tk+jezBhbB66{r;)V9=VAV`AW~' );

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
