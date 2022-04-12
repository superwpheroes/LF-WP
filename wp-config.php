<?php
define('WP_CACHE', true );
define('DB_NAME', 'lifeframer_staging');
/** MySQL database username */
define('DB_USER', 'staging');
/** MySQL database password */
define('DB_PASSWORD', '7b10f099c0d3000acd');
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
define('AUTH_KEY',         'G!:<AD:Xv1yw?9H!g&y@-^5b8h3Xy3m{m0t)F`.Ca*!>A&8!vmABBfBwDU}r(Z<|');
define('SECURE_AUTH_KEY',  'NH<{nA@HK>9,*b[D`*w&C_f|@T_NT.tc0GyGsH-p |5ZT6guvwds:-V-<rdI~Gb!');
define('LOGGED_IN_KEY',    '|Yo>x)|C~DW&]jxx BLs$IXX9bLn?z |YA-+OjC89{T|/?Z<i*53m500(?>Wkyd0');
define('NONCE_KEY',        '#%62UC)81~ }Gx~M)5Nn{VWTCS[.>E-^qXiQ ?)>U_ZAC^z!%,f-W+lE_oc4+#SP');
define('AUTH_SALT',        ',egA;{F(84*PN8@j|vqw[a9>VZwjYY^)~Zd>hh@ZE(lfRwH3:%~Um!t[d>|ZB$!h');
define('SECURE_AUTH_SALT', ')>G{<p-;-;JM|q?$;qZvH{9%iS[BOLj72OKve-%Q]iSSj<#-$q8Gk<^xh1+!~-k1');
define('LOGGED_IN_SALT',   '5QoDg#j|o-$&Kof<2SYhV<|huBO!ej.e%US&{pC=5hV`?imz{yFR~m6j);`AfSrO');
define('NONCE_SALT',       '~=Ly@:9A|g}q]vuHT-{YIm}J WIGmra{0`jP;)DtR,D(|]U@>?<Zi-g<1XQ2RvS}');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrd_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
ini_set('log_errors','On');
ini_set('display_errors','On');
ini_set('error_reporting', E_ALL );

define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_MEMORY_LIMIT', '8M');
define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );

// define( 'POST_SMTP_AUTH_USERNAME', 'info@life-framer.com');
// define( 'POST_SMTP_AUTH_PASSWORD', 'hF62t4ZGgp');

/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
