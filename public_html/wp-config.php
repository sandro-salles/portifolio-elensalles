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
define('DB_NAME', 'elensalles');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'BL_9Uec~fZ;b&+Dq3x?!$l~CsH|@L}DupjXTV|NW(g_N~#i*BL.!NRlo$(b.P^Ld');
define('SECURE_AUTH_KEY',  'sc;asPO;$+}gAkPB-)!j2GLn9-_^rJ++6my3(~UyEJo<|/WWJ]$CK9wB,|EK>Y_d');
define('LOGGED_IN_KEY',    'b|&&S$Z+@t$v+9xVh,5O4C 1*?Z2WQ~N#(IB8AbB4Y(OFt9DxI0b#nJ~b|. ANl9');
define('NONCE_KEY',        '~{VSKp`S=CC.<qhzj&Rlv=W[+Wc)I3LaJ5}YjA88{@V?}aRt<H/d09}@Pl7WY#^r');
define('AUTH_SALT',        '#/n3B+|_~kmH0XAs=P![VP;? QfRkdoI->q8_9M?~gRzRjI/+Svz)<NKaj0EAv+L');
define('SECURE_AUTH_SALT', '}gs6yV ?/waf)i_reltakT$}<fv-=Xt;iF%+n($||m&.1 /V^oTE|Yt&r=@iSDz3');
define('LOGGED_IN_SALT',   ' XS6|F*6g9]VR,+7c@dQm162>.2d%/({-#]@i Kz+|S4G fhOb?N8f2h.o*{JTg0');
define('NONCE_SALT',       'z$spC1/#[YKoJ}jC~mKjqz,R0:e}sz4Yd8+INO-zY[+hgwh$8rc:Ww/o[D$ggBd[');

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
define('WPLANG', 'pt_BR');

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

