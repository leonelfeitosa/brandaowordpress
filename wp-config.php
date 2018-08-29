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
define('DB_NAME', 'wpbanco');

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
define('AUTH_KEY',         '0?J CxUJlVjmcHzB>8kEG>#}{Ig+s[swRR3tPVv<E( Pl{-Y_+^(n6pW__3HU=]O');
define('SECURE_AUTH_KEY',  'E!,&Y9$|AAcQd 75c$z8&#^ilY:y@|^@KI6_UwVn_A;HM4QV6#VFl.YJZ$wyHi7+');
define('LOGGED_IN_KEY',    '_<UEjpd@+F|2&@*Nl:h/B2EI-Xb9kyM(F[b2rKhs)I{Eh{3#XJWk}u?)n]ot(A!,');
define('NONCE_KEY',        'OI.d)D!sz$=L&1hmCd&s-Jc?a2am1a ,>|/;?A*h,)cb^qYO[d7Dd+,zPNtAcN++');
define('AUTH_SALT',        'lRF:Vt`KTbj([rn|::}cxz`_] A*Z{j<@PhcE5}jc!nG5k1r4<:O93]G:`o&u1)g');
define('SECURE_AUTH_SALT', 'CW!y!5ksrd`C~Zzy/7pK-)2xiA/)=cVD01tD2Ak Qt_g$.Nn)!Y[5r]7b23t2({2');
define('LOGGED_IN_SALT',   'lUkitPG{KT@]0hF<]Np81J~s/,2(x.80xX0,Ns=Qg&at2b(vu *RiU50 #W.^GVF');
define('NONCE_SALT',       ':SdI)WJ^_:JQPZMT~/dlV/RpOhtmrU&vmalowmg_|UAQ,G&R8dWA?Gk32s`G2#={');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcrs_';

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
