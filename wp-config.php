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
define( 'DB_NAME', 'wordpress_practice' );

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
define( 'AUTH_KEY',         '#ruA|jLzdTj^2FO_$jj?+~Jo=4M*~13 j-V<rkqqW0wh3g3Vzq3Wj/,mC>A=_S]G' );
define( 'SECURE_AUTH_KEY',  'ejvDVJ_=3|#Eqw^Ptva3o3}*JNEWT*5015?z[0uUnSMX/>fEk8UT2/u35jZN4kJ9' );
define( 'LOGGED_IN_KEY',    '}*h?XZP h|4IKW^5PC~M|3To>[!?qpUD?@uDhH[rMF6[3`ax?l1lG_8:Z+kGo?zo' );
define( 'NONCE_KEY',        '^Kt[ANCY~yQzPmM>1h$GC&!?+FyOh,z#7;Zud0Frx5+HS,4FRHJ _Xl@*|c1=D%9' );
define( 'AUTH_SALT',        '=3c<&H}A;$C=tE!v}7De}1vM#)%z<jT+$d${3LBq09=F<4 -(r.*.j]8IL;kqss9' );
define( 'SECURE_AUTH_SALT', '.h)azkj){b/{yfECl)*df4(95V;FTz|?]&6T/)jl`A`I.t=wxdx+]H8``_pR}Jv.' );
define( 'LOGGED_IN_SALT',   '9^W hR.#/>{dHHF%sg!Nkm~<elISjGx)8FJI_d*IlDm0v&&.k*:SSrb-c*f|1~g ' );
define( 'NONCE_SALT',       'C`(lEG%I|Ufx2;ni[Bnzow~{_@-owcK[xAP#5Of{6LgzgRTj*B$,Z_n~]M1#3XGn' );

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
