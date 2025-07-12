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
date_default_timezone_set('Asia/Kolkata');
define("loder", ''); //for admin panel
// define("loder", '<div id="loader" class="app-loader"><span class="spinner"></span></div>');

//----database
if($_SERVER['HTTP_HOST']=='localhost'){
define("dbuser", "root");
define("dbpassword", "");
define("dbname", "expressinter");
}
else{
define("dbuser", "expressinternati_maindb");
define("dbpassword", "Admin@123");
define("dbname", "expressinternati_maindb");
}

// -----google captac key 
if($_SERVER['HTTP_HOST']=='localhost'){
define("g_captcha_secret_key", '6LdI90glAAAAAARq3XMFIHVz4nona07ZWPhGpXH-'); //local
define("g_captcha_site_key", '6LdI90glAAAAAIggaNCRlPJ9aXQCf5RnAXpP9SNc'); // local
}else{
define("g_captcha_secret_key", '6LcDasQpAAAAADqaPZphiUen2ZW8thFn89b6JNSL'); // live
define("g_captcha_site_key", '6LcDasQpAAAAAHsCpRuNFhj1_ns3pKCSfHLndoji'); // live
}

//-----mailer setting
define("mailhost", "smtp.gmail.com");
define("mailusername", "expressinternationalzirakpur@gmail.com");
define("mailpassword", "uzrtujbjstynbrcn");
define("mailsetfrom", "expressinternationalzirakpur@gmail.com"); //jha se jani he
define("mailaddaddress", "expressinternationalzirakpur@gmail.com"); // jha jani he

//------basic change
define("website_name", 'Express International Courier');




