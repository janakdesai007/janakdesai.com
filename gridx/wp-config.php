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
define( 'DB_NAME', 'gridx1' );

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
define( 'AUTH_KEY',         'yI[W-HW1=?|h6raAx`XGw~@3&@!5SHpP-Mo<%L?i-Oo=^*PUp+bd<myY-wOVCx*A' );
define( 'SECURE_AUTH_KEY',  'h]Ar3=Z7MKh$3N e/(nQT7)+DjBexnr~ [l8Yde`F(I`%5ptC*?u{dWa-W1)S@Wn' );
define( 'LOGGED_IN_KEY',    'IsqsY#i9Koxz4$/Tc|NK;Fb}tM}heKxt~Du(Tp<+tf69_s&K<8G,u!IZ)]N*EV^Z' );
define( 'NONCE_KEY',        ';FaWtRv=N/w$|O{]fmEE,~TAn/=CcZJ`d7|siWnn:b%D[s0EPNJ@I@=M(ycGq8xG' );
define( 'AUTH_SALT',        'r.1cm`9rDr=e)L`kpmoN @*WiBYGV$)9!*/,xX>fY.]Ibl55XCRh[PV_3@[[z(+p' );
define( 'SECURE_AUTH_SALT', '}nQ)CXBsq=;cq$w,Tz#-%@RVkRVB<v;q}0xw6fE&;ZnK$<sKA?m_JnN59:cF%c&0' );
define( 'LOGGED_IN_SALT',   'w#IUj5ex&T_jwfbKkQH;vkqf,{;mK*&4@Gw:&O%Kgl=G8JqVBV_Gf6s* G-37d7;' );
define( 'NONCE_SALT',       '4DT7Ns<Fh`Y)4fkTD 3)H#6FfgsB]rQB~TcJ]aWe/LGo2=f^?m-R*^K@I%3+N$$?' );

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
