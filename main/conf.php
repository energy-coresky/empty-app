<?php

define('START_TS', microtime(true));
define('DEV', true);
define('DEBUG', DEV ? 1 : 0); # 1, 2, 3 - verbosity level, 0 - debugging off
define('_PUBLIC', 'HOLE.SKY');
define('PASS_CRYPT', 0);
define('PHP_TZ', 'Europe/Kiev');
define('DEFAULT_LG', '');
define('EXTRA', 0);     // 0 - off, 1 - adjust mode, 2 - run (don't check links list)
define('CACHE', 0);

ini_set('log_errors', 0);     # 0
ini_set('display_errors', 1); # 1
ini_set('error_reporting', DEBUG ? -1 : 0);

define('DIR_M', basename(__DIR__));
define('DIR_S', is_dir('../air') ? '../air' : 'vendor/energy/air');

require DIR_S . '/sky.php';
require DIR_S . '/heaven.php';

#SKY::$databases = ['driver' => 'mysqli', 'dsn' => 's localhost root '];
SKY::$databases = ['driver' => 'sqlite3', 'dsn' => 'hole.base'];
