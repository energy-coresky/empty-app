<?php

$argv[0] = __FILE__;
define('DIR', dirname(__DIR__));
chdir(DIR);

require 'main/conf.php';
$sky  = new SKY;
($cron = new Schedule)

->at('0 23', function() use ($cron) {
    $cron->sql('delete from visitors where (dt_l + interval $. day < now()) and uid is null', $cron->n_clear_nc);
})
->at('1 0', function() use ($sky) {
    $sky->s_email_cnt = 0;
})
->at('30 9', function() use ($cron) {
    $cron->mail_error();
})
->at('+', function() use ($cron) {
    // test eVar
    $fn = fn($i) => $i > 5 ? false : ($i % 2 ? ['i' => $i * $i] : true);
    foreach (new eVar(fn($r) => $fn($r->__i)) as $row)
        echo $row->i;
})

?>