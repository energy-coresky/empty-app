<?php

define('DIR', __DIR__);
chdir(DIR);
define('DIR_M', 'main');
define('DIR_S', is_dir('../air') ? '../air' : 'vendor/energy/air');
define('EXTRA', 0);     // 0 - off, 1 - on

require DIR_S . '/sky.php';

# uncomment & tune for Redis test
#SKY::$plans['cache'] = ['path' => 'L/cache', 'driver' => 'redis', 'dsn' => 'localhost'];
#SKY::$plans['gate'] = ['path' => 'L/gate', 'use' => 'cache'];
#SKY::$plans['jet'] = ['path' => 'L/jet', 'use' => 'cache'];
