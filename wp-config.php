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
define( 'DB_NAME', 'demo_db' );

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
define( 'AUTH_KEY',         '%_=Z3Anc$b;>|V.f{CN8t!g]+bdoe=2ShQ-WXBoOXTrXLKn{(`r8b04ZIHvRK)|Y' );
define( 'SECURE_AUTH_KEY',  '{:`7:!,V]KDA)|CWm|uoVO>pB&/$>cH$&W)`Tpv>K, L35UKT4;iEkB)s,&Yl6Fb' );
define( 'LOGGED_IN_KEY',    'mVy =F`TJvdsjC(MZ2A7Jkj<y3cs^V$YA-fFju4,N+XVY:Qq[/ihu `,kUa55Qo[' );
define( 'NONCE_KEY',        '-Rxic@t*?3<v38?9OoJVk/B LP+HNc&JwXtI/!0ZFzd@{rqN/PXg5Sp_+KV@?~a(' );
define( 'AUTH_SALT',        'iXzO9i>$f`%8wF0gu//QGR/_6!}>Ml%t-g2k&@+J30m$}]#L)Jm*eo+^GtizpAMF' );
define( 'SECURE_AUTH_SALT', 'x)IaNg8zWTC$SMaKGI_Di:`$i~6v1Bipj{2P;#mhCF9w.b>}+7MFUiU*pHDy,4,s' );
define( 'LOGGED_IN_SALT',   'G?TB^@7H]z4frX#eON.B r35F$6]Fd&YQdjuDxW2yQfR.uT)c&[NRGRlXyG$o{:d' );
define( 'NONCE_SALT',       'IaM]y44-H-,WX{vxG*GhJYSrXvyjUpf(<6NX2<Q(VNbq J^6e`HUd?Y#-nJRm[v8' );

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
