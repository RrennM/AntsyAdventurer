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
define('DB_NAME', 'wordpressfirst');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '<afA+R4z}}3PG[@eYvzLg_5vX:]%4^h;0t![,E#XduUyS(;.C?C)pk%Efih{aePV');
define('SECURE_AUTH_KEY',  'DSg_><d>BM{!D*<j(uRyNYb)}t(w|C!rx6K+yedFK4hrf1T13aP?nNT=3$VrHluQ');
define('LOGGED_IN_KEY',    '=&x]G9aXkQYm0{^S/39j@GE)gd3;E3pd>A)&&W{V^FVH}4H,EB[xQ]=H),k5=A#C');
define('NONCE_KEY',        'CT^]<F(8^}D!iw9JIDX{D#Q?0%(0[6QC3n_XHc+Qo3RhJTtZfVPZ1EB jz7D[ot/');
define('AUTH_SALT',        'irbs,UZ`3S2n*iF0n}buqm:V:xqYj1qQeaHHS~lM-=S0b1o}(|#]6aIrm^9{i4f6');
define('SECURE_AUTH_SALT', 'hutJj,G`?6@ufH}0GUWP,TV2{l$H6+OMF9>H$eJ>6r#Di|F~&)^RS0$P8y$h3Y~G');
define('LOGGED_IN_SALT',   'g~4)&A8kzh_]G|(&(S#q$,ru9C<|CphZe%{4h)=r:`~ABfJ_:`J_!}Np9 C-C>i+');
define('NONCE_SALT',       'tN@f]R[D98^WkHa Ks^d+ue])qWk]:&r!onNUW/r.X<&Jl,72co7bawQ5`#3}2Y7');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
