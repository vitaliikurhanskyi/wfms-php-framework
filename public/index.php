<?php

echo "lesson 3 - ok";

if(PHP_MAJOR_VERSION < 8) {
    exit("You need version PHP more or equal 8.0");
}

require_once dirname(__DIR__) . '/config/init.php';