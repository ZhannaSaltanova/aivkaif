<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Xbl;AQ2zHI2`sN;u9(HJl&3I}2rET`6WW|?_T1nE&P!j4`3qszIQ/]]lA[rB-rve' );
define( 'SECURE_AUTH_KEY',   'V.MRCHo6JQ{/_5*M. j*AG/yp,Cw59eQ=.CF.%<~[,l 04tmtCQ%`+(6(h@&ul;$' );
define( 'LOGGED_IN_KEY',     '@J-mY(D4Bm+wIxO|V/( EVO-zfI}Ofr+(3/ *2ucy#RIy:i+!zqA6 E*w#%~j.cx' );
define( 'NONCE_KEY',         'c{1S$E9UIA+z5oTM_w~5f[L-Vvj!n0scP[nh(u).vSwR$a?/~|}>B5.>9Iv()b+V' );
define( 'AUTH_SALT',         'Y)vY?V+yX_#ZRO/M<^[IJpXbg>#>picG[kNRZ=~YkLs27>FdN&L:n|D1Km0_inXi' );
define( 'SECURE_AUTH_SALT',  'Bo)`>B4WpYYJy_ysO1krwI&4orcegmDex:qsbHMdUo.#2]qu_Vm@N(= >*-Khr@p' );
define( 'LOGGED_IN_SALT',    'K5KGUJn>&??*30Q8z<Sy!4zF6B`364!X#U-#cC?55-r7uqG:d|I_ny$nZBK[$Tu&' );
define( 'NONCE_SALT',        '(gOC*U?:{QeehB;~^!WWDD~y,~Up:U As%9Wpk@888jiz.U{{Tqu<Z!Q2J*G_[Uc' );
define( 'WP_CACHE_KEY_SALT', 'fu u#zvR%:ZpkYaaQ6ds;f~e}6CZtl}rE2Y^z3|(TSpGWuS*KM|:,rA#*:R1#;o[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
