<?php

//set timezone
//TODO: List of other timezones?
date_default_timezone_set('Europe/Berlin');

//site address
//TODO: Root Directory?!?
define('DIR','https://your.webpages.root/directory/');
define('DOCROOT', dirname(__FILE__));

// Credentials for the local server
//TODO: Is there a need for mysql?
define('DB_TYPE','mysql');
define('DB_HOST','your.db.host');
define('DB_NAME','your_db_name');
define('DB_USER','User');
define('DB_PASS','SuperSecretPassword');

/**
 * The following defines are the passwords to gain user or master rights. 
 */
define('PW_MASTER', '$1$1cdTYDNY$NkGmjOZ2IMddVVHezrQNX1');
define('PW_USER', '$1$1cdTYDNY$NkGmjOZ2IMddVVHezrQNX1');

/**
 * This is the session prefix.
 */
define('SESSION_PREFIX','nerd_');

/**
 * The sitetitle which we choose to be 'NERD'.
 */
define('SITETITLE','NERD');