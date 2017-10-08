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
define('DB_NAME', 'testpage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u]}%(L%e0T^aaJEl1+Ga[uO:Q+ivwX(>,Us2a<6)2MQ;U?S6(A#|8p&2AdV U[/^');
define('SECURE_AUTH_KEY',  'pVfup/Zn#b?!fpsJ%)7=VJYP7jr!iWEx^!=ly1qd4Ol(%A=qzV-pQ-gp]FHFIv-o');
define('LOGGED_IN_KEY',    '@Z}v+hy=Zr]j?%?~w3!0jLL](N:j;;RPpB_:Sbw~[:-]h-ZS3~{L /O_mnG=a!j_');
define('NONCE_KEY',        'xu$xkHut*G=`QubM|PO1]r>6$3;J*5vLr57nDy*%64U1-h&w:k~&SFC(9qI3Xb38');
define('AUTH_SALT',        'KM7S#NZ C$Eh8Yo/|yct`Bf>lsm3nc(d`#U(|]Z/ldFKw-TV(D$YLeMF ODrwb$v');
define('SECURE_AUTH_SALT', '^rVTC^Mroy^OM)GFtZFZ]X6CLGadk.8y*&Vy-kw685a;Z8/id97TM7f#y!H>=gPy');
define('LOGGED_IN_SALT',   'UnlEa?#<:!R[{5`&n80_zq&%uLn8YV?`E6F@_L:<&5|[kTRibsVSRDtV|YZp2/kH');
define('NONCE_SALT',       'zvS0!FKO{OEI(%f2/24nC0v9QL%9PJZM|SuCR(s`Ki7,LZ3CWX(C>7I?G>u$a}n*');

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
