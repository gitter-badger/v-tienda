<?php
/**
 * BoxBilling configuration file example
 *
 * If you are not using the web-installer, you can rename this file
 * to "bb-config.php" and fill in the values.
 * Import /install/structure.sql to your database
 * Open browser http://www.youdomain.com/bb-admin.php to create new admin account.
 * Remove /install directory
 */

/** Define timezone */
date_default_timezone_set('America/New_York');

/** Database settings - You can get this info from your web host ** //
/** The name of the database for BoxBilling */
define('BB_DB_NAME', 'database_name_here');

/** Database username */
define('BB_DB_USER', 'username_here');

/** Database password */
define('BB_DB_PASSWORD', 'password_here');

/** Database hostname. Don't change this if in doubt. */
define('BB_DB_HOST', 'localhost');

/** Database type. Don't change this if in doubt. */
define('BB_DB_TYPE', 'mysql');

/** Full URL where BoxBilling is installed with trailing slash */
define('BB_URL', 'http://www.yourdomain.com/boxbilling/');

/** Set BoxBilling license key. Get license key at http://www.boxbilling.com */
define('BB_LICENSE', 'SET-YOUR-LICENSE-KEY-HERE');

/* Set BoxBilling locale */
define('BB_LOCALE', 'en_US');

/* Set default date format for localized strings
 * Format information: http://php.net/manual/en/function.strftime.php
 */
define('BB_LOCALE_DATE_FORMAT', '%A, %d %B %G');

/* Set default time format for localized strings
 * Format information: http://php.net/manual/en/function.strftime.php
 */
define('BB_LOCALE_TIME_FORMAT', ' %T');

/* Set default date format. Not translatable
 * Date Format information: http://php.net/manual/en/function.date.php
 */
define('BB_DATE_FORMAT', 'l, d F Y');

/* Set location to store sensitive data */
define('BB_PATH_DATA', dirname(__FILE__) . '/bb-data');

/** 
 * Enable or Disable search engine friendly urls. 
 * Configure .htaccess file before enabling this feature 
 */
define('BB_SEF_URLS', FALSE);

/** Enable or Disable the display of notices */
define('BB_DEBUG', TRUE);