<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'esponsive');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '*txMR|KbiG>{s3[8A|n|*~;uv#(d%.wmy!Rm%cNoe<&kw,K!V5l7v]D>@TZ+tmjd');
define('SECURE_AUTH_KEY',  '%+q%yX>#iXwjQ8m8N2[W-wF6B?PPpPO>H^@TY7y(@sU5P7}+B~7U}hoP^*9NSXL1');
define('LOGGED_IN_KEY',    ',](M`%U =yrT7`Wk&-qq2X-ghI?vq{67&.`)|lK-v8-AX#mdj=m]Z;:u]iJkn/sR');
define('NONCE_KEY',        'pf`ho!?^0MK%_s2|2sTiYBc?@yP76ih_Q%l:GQO@Em+iIDe(9$vjLFPkrmg;8+N^');
define('AUTH_SALT',        'l{-D{#/|zzDjG*S G8&GqP0@(_J!kK8pw>i/f+Tdr/JZe$L0{|Q-_xo)91HW^E U');
define('SECURE_AUTH_SALT', '<[jCr-4SXj|=nOL}3$j,y?+6h7cL0gq-7zd&o1gi+IrY?t! J=N@M@|^CzODL`y}');
define('LOGGED_IN_SALT',   'P?05rO~RDE0l+.1KvM=A&@L@;S!T}m;axQaS+t5Z1HM8@+4l.u{R{l;-kX+W[yYt');
define('NONCE_SALT',       'H:F^x.ALp_vNHEdO+.7M<$ec2+1N@!2C%MXl-w5ZyNCE34y+::>5>f#gJ#<|~5)C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
