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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'try_2_guessMe');

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
define('AUTH_KEY',         'V1X2`C8#8S.}tG~4D+V[1z=sYPL<` O9CP<cDx=R+reFoB@C}=+byCH3-?DN]RwV');
define('SECURE_AUTH_KEY',  'nayA~Xz2h02p!`Cn6rRWI_F|Ec<N*H5f+s`HOd3-7eN]IWV[LMbU]v0)BNe@yRG4');
define('LOGGED_IN_KEY',    '+;Dm}OxJvU-`@KZ+SDy-}1=w%3&l<IYK.t;8DhpVsuX gzJ_v?tyI7^_DAFU7)(e');
define('NONCE_KEY',        '|P8*vosmgJTS _qF_#ca$lQx&$~ i0g43Eii/wb&7wJjgaOR+x!(U2S=3/D2qtv%');
define('AUTH_SALT',        'sBm;)N+_*8e*zCGmUOM{}DD#q-9s5}%!5,o9;2mpEZVIStuaP|a)NjYwLI2nZezM');
define('SECURE_AUTH_SALT', '-<@$UxCrx36eVEi_P<jB2ML|,DG5;JZ_5g3+%5NE+$#5~K)hxBw-O[[7zc^(Q<k3');
define('LOGGED_IN_SALT',   '#H+|K3dTCiZ|P&a>j>c6?F;,/5^7*>nIi#5s,CgDyYE9V!XUJF?XJ!uj8255dq43');
define('NONCE_SALT',       'X?8h)P!Uo7)t}:aGYdgb8?+jJ@9F[Lk)oQ8$(5!IjQU0.S_Iww.#Q w<&E:<W-->');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
