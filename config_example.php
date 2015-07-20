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
 * The following defines are the passwords to gain user or master rights. hashed using sha256
 *
 * PW_MASTER = hash('sha256', 'test')
 * PW_USER = hash('sha256', 'test1')
 */
define('PW_MASTER', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08');
define('PW_USER', '1b4f0e9851971998e732078544c96b36c3d01cedf7caa332359d6f1d83567014');

/**
 * This is the session prefix.
 */
define('SESSION_PREFIX','nerd_');

/**
 * The sitetitle which we choose to be 'NERD'.
 */
define('SITETITLE','NERD');