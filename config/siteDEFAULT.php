<?php 
define('DB_SERVER', 'SERVER');
define('DB_USERNAME', 'USERNAME');
define('DB_PASSWORD', 'PASSWORD');
define('DB_DATABASE', 'NAME');
define('PASSWORD_SALT', '//SET_BY_C5');
define('DATE_APP_GENERIC_MDY', 'd-m-Y');

// Base url to http
define('BASE_URL', 'http://www.SITE.co.uk');
define('DIR_REL', '');
define('REDIRECT_TO_BASE_URL', true);
  
// Disable Zend Cache Cleaning (may improve performance)
define('CACHE_FRONTEND_OPTIONS',
serialize(array('automatic_cleaning_factor' => 0)));

// White Label Configuration
// Disable concrete5 marketplace integration
define('ENABLE_MARKETPLACE_SUPPORT', false); 
 
// Disable help searches in the intelligent search
define('ENABLE_INTELLIGENT_SEARCH_HELP', false);
 
// Disable newsflow
define('ENABLE_NEWSFLOW_OVERLAY', false);
 
// Path to the logo image
// This file should be 49x49 pixels
define('WHITE_LABEL_LOGO_SRC', 'http://www.knibbs.co.uk/concrete5/logo_menu.png'); 
 // Alt text for the logo
define('WHITE_LABEL_APP_NAME', 'Knibbs Base Site');

// Define default email address to prevent ADMIN's details being used
define('EMAIL_DEFAULT_FROM_ADDRESS', 'no-reply@SITE.co.uk');
//define('EMAIL_DEFAULT_FROM_ADDRESS', 'mariofaccenda@btinternet.com');
define('EMAIL_DEFAULT_FROM_NAME', 'Website Enquiry');