<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vemdor/core');
define("HELPERS", ROOT . '/vendor/core/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", '/*path to the layout*/');
define("PATH", 'http://wfms-php-framefork.loc/');
define("ADMIN", 'http://wfms-php-framefork.loc/admin');
define("NO_IMAGE", '/public/uploads/no_image.jpg');
define("WISHLIST_LIMIT", 5);

require_once ROOT . '/vendor/autoload.php';