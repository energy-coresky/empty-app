<?php

define('WWW', basename(__DIR__) . '/');
define('DIR', dirname(__DIR__));
chdir(DIR);
require 'main/conf.php';
$sky = new HEAVEN;
$sky->load();
MVC::top();
