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

//set prefix for sessions
//TODO: Better description
define('SESSION_PREFIX','your_prefix_');

//optionall create a constant for the name of the site
define('SITETITLE','AWESOME SITE TITLE!');