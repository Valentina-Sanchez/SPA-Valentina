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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdtienda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>|w~Cq|Vs[H7I@6<J;K9z%c@`LhOCbW#7zzT_Pwj$A-Gzu `XZy}oZ4,e_v-HzW+' );
define( 'SECURE_AUTH_KEY',  'B)0K|4=x+7 xGMHrrP26[1d2v?(:4X;*Ol6`)S7hIX6%^^)(O;sWz!an-N/tp*$6' );
define( 'LOGGED_IN_KEY',    ':9jDXX}d+D(`q&(~RFCc P k$B {I63,k#PT%JIsR[>J9Zk!R~=!SV:gA**MK 7p' );
define( 'NONCE_KEY',        '9fK`.c7^6b C@E+tis4LfkJnN/rO |GM0b`Dxw1~q:{4C?~je )b=65&V`/jf^Cx' );
define( 'AUTH_SALT',        '{|oNQN5oxf[= koNrG l$O}(sl6FbzlB?Iwz,z+29)<.>n15,{q3k DMipRH)B|I' );
define( 'SECURE_AUTH_SALT', 'f4lZc5^O$g29JHOC_%70G|=UqIGd`tn=.oLAx>~fknn>YxAZXbsO5S1$/#&1|LcH' );
define( 'LOGGED_IN_SALT',   'h>uF5lX>BHV{LMd~C4b,jxj9]Qx9vty(_IwAB=B,8]mV;l:7$j-~us4`)CkqP54l' );
define( 'NONCE_SALT',       ']TH=%bo+*=Ex& ]{6Zwb(4JKNQwfF,AfhH9Rr6hpAk+L^>B:Ziz:nH8@mR;WK0<<' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
