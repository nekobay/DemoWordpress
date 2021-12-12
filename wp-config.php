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
define( 'DB_NAME', 'demowordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'jrNd2n|4.!Jt}Gi2S|/9E.o2AvyMx@z2huJVEv_fvZz(@@H<k`(rY*!d]TR]w(m,' );
define( 'SECURE_AUTH_KEY',  '7kuUawdXzHNfK5YeTBj-NP$F/vDv1$?bVUsBD9^TF#1wIQE!NHoBfKZ=XtAz8gwj' );
define( 'LOGGED_IN_KEY',    ' K3mR(B&f [=vv>fqXFoUn%2(6.=voO{q,h]ixY[G|4 (FzRB.9sNZP]_<B|f#[{' );
define( 'NONCE_KEY',        '}wl@MjfetXFHgR-%pm<Q#I)`-DC9]^ H{$a]EA2at:,*tk%V=bf>`l(4T_T7KbBM' );
define( 'AUTH_SALT',        '>42%8.dqsllq-ZL:*iQA55diA~71W_&.t^{GqY3J{tWa/&Kf9[bI+(|,xv/ACLYS' );
define( 'SECURE_AUTH_SALT', '~h)an/`9@0JI^i_O4,r@PI#WN!{<(z*LNYQM_yzG69M3NCle_A.v`S>l5.;^RW|T' );
define( 'LOGGED_IN_SALT',   '2L%UM/My|v$j$Q8NLpr]#)eQK/Tp-NY[weeA}THfcvZm<w!qx-bRX:s[~qIl%yYr' );
define( 'NONCE_SALT',       '|>J-qKoC4Bk[IR&Fi]K}%d%)iG6^sh,vw!i,:KCK7B*_M*]Beal$Y5EvG^ Y6%bf' );

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
