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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_portifolio' );

/** MySQL database username */
define( 'DB_USER', 'portifolio' );

/** MySQL database password */
define( 'DB_PASSWORD', '1996fsbYago' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '44){Bq<k4[}g 2:L,.wD%WBN {S+n}5Tyuya[G$J?2&YqN>VrN,5M2st;iLf]In*' );
define( 'SECURE_AUTH_KEY',  'q3a-SV*~gyj(j;eH/E[@?C_b*P&^7*BLJ</Bby2jNF]/omYn9.kRg_JmX5,;l(*q' );
define( 'LOGGED_IN_KEY',    ':CkzxGOpRANKzWmk(,JHnV$(=I-y#}@L/s_P3mbKoPq^y&IpE^YF^I}Qhn96OE[*' );
define( 'NONCE_KEY',        '#GPU7GhM=yZ!W6UZ^UOWIRJ}K9W.di<F!9~3dUa*T-6^v$&p#:{&d0%+}@uSh,F^' );
define( 'AUTH_SALT',        '=vUm5P29inmYgQ(R32S8gA7nzJixi-0vT>wMR.r~J:LzO9/X0%QW!#ANeB(v+#(_' );
define( 'SECURE_AUTH_SALT', '^<99]X&zPH%`&*}Hvm~7(V< #,t,m*3kV*<r]x7F!APYn5wN%BcD.`pLv5{J36kn' );
define( 'LOGGED_IN_SALT',   'k%%j(f()Y10%pvE<TaG[W@}D$63MAI#TO@n??Ke|hQ>a]JTOE2A9^}}6*e;NXsN>' );
define( 'NONCE_SALT',       'qjH[KG*Fha{{@Bs= nSc_vc0%04l:!6opZD_3R5T}5Pm%(XzD^OQkXk&){R]jofO' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
