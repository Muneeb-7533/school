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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ueU,-;doOhP{aC{i5`b$tz*9*nN.*IUD#=EygPvUjbli%F,_Nj(ey1CnbagRES)=' );
define( 'SECURE_AUTH_KEY',  'MRQQnc(tYZS7ao1ko:`YB+5k8:R~7a!BVZiclttbLy&b9;9#[b7,m{YtTQ!a$^}m' );
define( 'LOGGED_IN_KEY',    'YlI)?Anm8ck2Zl{!O$<dDXQUJZb}~R5H_&(*-|K%=Vq0>..$m^whPlwEUt* bD%z' );
define( 'NONCE_KEY',        '/O:bYZ^Sxbdby5eSrsy..kOM=3P!y2277>fgd^hA=Axn+prtt%L8SLoLFiO}dQ2C' );
define( 'AUTH_SALT',        'poG5=sC8DmzbL4SN%U%DD/W[:GZVBfD1!Y@#FCA=/i@D%,5F4t l6@W.&n>:hIW0' );
define( 'SECURE_AUTH_SALT', 'XI|%9}m93ZuUdTgMG9iKtd^@{B?WJ/:7lJM2S)n@u:k0WWGU{S`/D!cXE}+D(hXU' );
define( 'LOGGED_IN_SALT',   'AWXGci#bBK*4&{^$xK)pJ@cS|L**Lb{=kF^,DC[S#r=Ey*}BFpn =4bTS-lKKu`N' );
define( 'NONCE_SALT',       'I.{)._?>1E.1Owye;%!j3*f6a+p;$-Y=i/OJlFE+Yu)UY-Nej^Q^4LC+S-OkVS.+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
