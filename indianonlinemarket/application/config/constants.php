<?php
defined('BASEPATH') OR exit('No direct script access allowed');

defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


// ------------------------custum made

define("dbuser", "indianonlinemark_maindb");
define("dbpassword", "Admin@123");
define("dbname", "indianonlinemark_maindb");

// define("dbuser", "aduetechnologies_unityindiver");
// define("dbpassword", "Admin@123");
// define("dbname", "aduetechnologies_unityindiver");


define("loder", '');
// define("loder", '<div id="loader" class="app-loader"><span class="spinner"></span></div>');
define("website_name", 'Indian Market');
define("shippingcharge", '60');
define("cod", '100');

define("mailhost", "smartacademy.life");
define("mailusername", "info@smartacademy.life");
define("mailpassword", "Admin@123");
define("mailsetfrom", "info@smartacademy.life");
define("mailaddaddress", "info@smartacademy.life");

// --local--
define("g_captcha_secret_key", '6LdSfUkpAAAAAFBZUAzW9AYWk4xdVOLoQoJuWPBP');
define("g_captcha_site_key", '6LdSfUkpAAAAAF6wmsQ_3MX6F0Kwg3UYomwsYWjd');

// --adutech--
// define("g_captcha_secret_key", '6LfUVhUkAAAAANHuGSwXVYofPFYnMUjDhh7fOlSu');
// define("g_captcha_site_key", '6LfUVhUkAAAAAPvkvBBw-TPEK_VZyxQiX6shB78p');


// define("phone_pay_merchant_id", "M22C3TGPWNQRJ");
// define("phone_pay_secret_key", "b179a91d-af30-48bb-805a-17d893580b3c");
// define("keyIndex", "1");

define("phone_pay_merchant_id", "M22F7O1SNE0FN");
define("phone_pay_secret_key", "5055c37e-1259-48f3-9eae-369f482d33a6");
define("keyIndex", "1");