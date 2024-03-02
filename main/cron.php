<?php

define('START_TS', microtime(true));
$argv[0] = __FILE__;
require __DIR__ . '/../bootstrap.php';

$sky  = new SKY;
($cron = new Schedule)

->at('0 23', fn() => $cron->visitors())
->at('1 0', fn() => $sky->s_email_cnt = 0)
->at('30 9', fn() => $cron->mail_error())
->at('+', function() {
    // test eVar
    $fn = fn($i) => $i > 5 ? false : ($i % 2 ? ['i' => $i] : true);
    foreach (new eVar(fn($r) => $fn($r->__i)) as $row)
        echo $row->i;
})

?>