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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'restaurant' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AMuy]l?kq]fq|}[NPy|1W;XL16a[h%{z4J((MQwv9@uNeF0Vd6awed aZaOo]Gz^' );
define( 'SECURE_AUTH_KEY',  '>)L9(1($F+zN-d,}Ufmr>`zEW~0TcN+Ti/)(%$9ftEn_/wEDcUXo2Rg+y; R>D3u' );
define( 'LOGGED_IN_KEY',    'j:WH{J[nDl.l`t$sK-w;OC44=8I_/(/vb$fj@qH~e1CvENX903}KL@H?b1aP|v#]' );
define( 'NONCE_KEY',        '6N12#!MvA4(@oTO0>5F8:.$<de.2b<%F6U1/LYDYYN(9%o@Q_FFT+o>cl(Z],FH:' );
define( 'AUTH_SALT',        'd!i41ub.Hj3XvT}K2D9J9k -~} /Z%L^R?J^yZ-qRr:).}!RHAR$uKkbByEKqF=L' );
define( 'SECURE_AUTH_SALT', 'm`.m),Fd B)_PAu_Kn5+AZ/xJ?Ey[-^&?DJOgKq?Q3o)Fo;2/tXjU3xhz&~hOrbh' );
define( 'LOGGED_IN_SALT',   'Lt@,WMq0EOAaMOI[egD D4bi1L(#_XvtR[?}O&$^BJG0>~a>|_6xZXGrPN,G)#3e' );
define( 'NONCE_SALT',       'e1HVJX]F-;qP%,/MfB0dS[A>rI0u!it/s^UN]+7I_Cng0D=98i?X`Jj#[W$*.1P?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
