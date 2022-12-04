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
define( 'DB_NAME', 'wp_myapp' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         '~.G:qTi|Ta-k5zDBp7b<DV6%5wry/h5uGZV0(jB}fz1hWO%CB]eI%>zqvdcq{3@e' );
define( 'SECURE_AUTH_KEY',  '99BdW3>4[,=:5)u 3&#Q~!jTD%t_rAE^bHZhcVfS4Y[pQq-{<@+cU*LYRAtzBzT&' );
define( 'LOGGED_IN_KEY',    'l%2viT(Zk61d}0|-jYef!hi/n)C:il5@qU!-DLXD;}i4q>?fd?sSE>:LFL.SWit|' );
define( 'NONCE_KEY',        '%MSI@NO`6E?|}frR&shcL;1:F?KTY]]=DZ8N{<Pzfm$:ou0)cA-(]I,_ SVKQ0=r' );
define( 'AUTH_SALT',        'yy}G!%/cLkJ7YxlqjIvC!Y[o.HtB/{EZ6CoXccM!sS/$Z(H)(XsnIe&yA{T8jI~l' );
define( 'SECURE_AUTH_SALT', 'B30YiXAY#^~ $j4HP>_i/w`6H7hxsV*&xOz}7}f6K*8`~fU~0G&6s$OPokv:X&jh' );
define( 'LOGGED_IN_SALT',   '4RIImpw4}I3YGE!EF}.(`xY{BgG7{S]GI@7L6OAp@Ro$m^e*IBdG9F-1kuLTP|T`' );
define( 'NONCE_SALT',       'e)2k[[QWkaMEn%AUh1  +JQG-cM7fjjUm4THhz3s!4?DqUt!O-Zk3]DRS Z_Jz!/' );

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
