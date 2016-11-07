<?php

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
define('DB_HOST','localhost');
define('DB_NAME','MyBand');
define('DB_USERNAME','mybandwesly');
define('DB_PASSWORD','');

define('ITEMS_PER_NEWSPAGE',2);
define('ITEMS_PER_SCHEMAPAGE',7);
define('ITEMS_PER_TEAMPAGE',4);

?>
