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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ctW02X1+vhuLCMIv07rjjzbviTz+3dv+Q1nPkSVbTBdmmCnLsXPPmuzEEKLZZHf1Ab1Dc49ADHM2FbIewRB8/A==');
define('SECURE_AUTH_KEY',  '+f8FBiLy1F+7OE8l/E63yub6mmVkjrwY2zZPE0h1YcWDee8zMmzEKwVzvtwBZrorxs4UnEAG1o/MPQ5ljwFsaQ==');
define('LOGGED_IN_KEY',    'Q/3VByK6mCJ/8NoHeyvnRuNBCWYijebWCy8QRJUt2+x06hpPj5LMlwDA+lWro3ZpyhHM0SPEhaqIxaH1bk6iZw==');
define('NONCE_KEY',        'VbmjtflRWBdBnY9EXvicbV0pOmQEInM+PFrJzmfDb/a0K21Z49R0GWQ1CDzguEb5gOOEjyuNRzMCX5ZLyv18qw==');
define('AUTH_SALT',        'ubA4SEeGxv50jO55xXXgsdfGePXLRP0upJsDKEHo2atOAKu3at4Exzc4YXQiPh9pZQi6VAQcdHhW1CtMrmQYOg==');
define('SECURE_AUTH_SALT', 'AfKPCbITA7w/NsQWCt2Xfy2CDqL5XP8tZJAsVATXtIzAEQPj1DSOD/iC4pzpPXQGrS5rsuQXdx2mA7OHVjG7KA==');
define('LOGGED_IN_SALT',   'J4RrwIMn+C9fO5WlJvcBJmtsTwYle6XOxhnp/iZoFkqiLuj5nanIuPJ0GBRahIBSOOHNVWn+3n6rAtWQ5+fDLA==');
define('NONCE_SALT',       'ZE/Xm3zLPY7v8J2fVI3Y0LOl7potnHKNVMXRwtmsg7RD0yU8nAWJrqpUYdA6vfOBIgBnKXjgTV+HCdUmfaEhhQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
