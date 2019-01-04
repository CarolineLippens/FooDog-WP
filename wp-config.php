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
define('DB_NAME', 'foodog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'user');

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
define('AUTH_KEY',         'xQh}-r?Y@PKY NEK&+2.[u<HGX@gD].vi*, KkR8x47OPONf+.Gz3,qXu90/<xB.');
define('SECURE_AUTH_KEY',  't9M5a<^5rl$C13,g=#]k,Jo@x@R6MVpGIMKY@!!-Q.RgrRI9ky{ mCx~jC%9KDGG');
define('LOGGED_IN_KEY',    '&cW(vv^d2:fE#2KTeRfCOJB1L=Tjbf,-}9O).F$Gi)yiB*rYi!P(Dx0$+(arB~WQ');
define('NONCE_KEY',        'B.W}q5T-mb*k-jG! R;W>%(e,]rnpzOPhoY-i!pB85hz||AD[ZeHR~6h;#_^jS}.');
define('AUTH_SALT',        '`G+,uI3n$:%w^J5H.6toTqC_GRt3+E.Cfw+FuK$,FCCRdqbg }H|_`_,.g|&I!`h');
define('SECURE_AUTH_SALT', '<L|]3/)cmv?>Hq2zh<]Tc$b:W@x4<SQhe8U@DNIgV;e&[P pg1V,.WPg/ae|*1|?');
define('LOGGED_IN_SALT',   'b:H-L4PRo`#J1&>vqE23#[aXO*258KsprxYK`Rm)O (X@j :8?L9=N5OkBMZV),(');
define('NONCE_SALT',       '6VHue(5Un$3*YR$Uzmfac)PAXjPzRs0wNX[G[KEA;h >F|FRQRmL,~Nm=f3nx7X[');

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
