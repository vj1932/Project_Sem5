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
define( 'DB_NAME', 'foodies' );

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
define( 'AUTH_KEY',         'tjv&`SQz:SE!5KZm8[S?caP)kE^7<i&F?IU}wkCf-w%4eg} -]oRr9!t3U1Y<|5E' );
define( 'SECURE_AUTH_KEY',  'zR#B{?iD6]$KemO!zgzEZm|MJE[Z#YL C0.Qn]|$*#@FcEc,=q14_8K}8hBMA_ ,' );
define( 'LOGGED_IN_KEY',    '1t?Cf:NXY#2FLYR[~M?YS+F[]-tk1HFSsxt[x).@&s!vt[c9,t$Kj7uPq<Mceni^' );
define( 'NONCE_KEY',        'b%F=rvy@W! 2l<3.r+r4Vi#)QBhr1_$p4>), (X,iLC*@+mYgx.Fe;6-{ 1tsn:1' );
define( 'AUTH_SALT',        'QcioOn>*StkO/|wsi8[EaEWX;P(K[p:!xOzoYb5&DU5hU1an}g!g/SsrWI?&4}X=' );
define( 'SECURE_AUTH_SALT', 'G_-6f-,}7WZ9gn!?Hf.([1ClD~J6M}Z_u9/|S[ynd%[:#IlxfF[]74]aLTNlb[yC' );
define( 'LOGGED_IN_SALT',   'QMvG/WPov<IiYo&XGx]7E:>zO%_/1S>fu!EHe`Cwnv+Q:,&;^$L6HtV9k.1]{_ N' );
define( 'NONCE_SALT',       'A)h;s$S7sJUOdm>|4,-Q|k~[eOdq;v#M1!J7d(>09*H?jK 9sj&2RxsshW4cVeYj' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
