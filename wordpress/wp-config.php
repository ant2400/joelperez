<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'joelperez');

/** MySQL database username */
define('DB_USER', 'joelperez');

/** MySQL database password */
define('DB_PASSWORD', '06Boricua12');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'u.:SJo$fT-tK_5As#kWs,>Y@F)Gv&/P?[QtUb/x|J/xv.|wxQ}Iq~f<hBw5/6$J~');
define('SECURE_AUTH_KEY',  'M7~@WTM:r4>ohh~mp!e<lgZq2P*SOS,,Ms-E*H3JB6D~0/A]&QJBAwT#,8Bvg0fo');
define('LOGGED_IN_KEY',    'bE$I?06fUoB5@N1HcWeD 3EN?-[WI)MF3?l V=c<bFQG}M6ypWN xW>GwNq-Kvrv');
define('NONCE_KEY',        'y+}5S(=r=Vz0(clkayEL!P/ocigResG0T+4 :Cfe;J&Bs$(:HVx(p$)Eyhw;uAv+');
define('AUTH_SALT',        'qdBySIpRb=L2D5nW!:9@>IN4j%;DkK7&c+1lL(~#p*ajL*NshFLv=1y{T!5]iXo-');
define('SECURE_AUTH_SALT', 'J )wM5xn1R8-v|g0_=+/7&NkPWz_&u)g0nwZbeBqA=)yD*Nk[wyA]pC-74}<yiiM');
define('LOGGED_IN_SALT',   'u^6Ol${@HoZ{%zqI cYc6?c{vccA{/EzD9VA:v$q UpUU`$ZIF?Qk%KW.D3gAKiK');
define('NONCE_SALT',       '/x*WQWgCx>G(A2)}UEoo_C#ZD%:d[<?&eq.c|kn9Yljg#7kF[#2Fi:>]ZQ$~D+q<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
