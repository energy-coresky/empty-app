<?php

call_user_func(function() use ($m) {
    $list = glob(DIR_S . '/w2/*.php') + [
        -1 => DIR_S . '/sky.php',
        -2 => DIR_S . '/sky',
    ];
    $list = array_combine($list, array_map(fn($v) => basename($v), $list));
    $list = array_unique($list);
    foreach ($list as $path => $fn) {
        $php = PHP::file($path);
        $new = (string)$php;
        $old = is_file($_fn = "main/tests/files/$fn") ? file_get_contents($_fn) : "\n\n\n";
$diff = '?';
        try {
            $rN = Display::diff($new, $old);
            $diff = strlen($rN) - substr_count($rN, '=') or $diff = '.';
        } catch (throwable $e) {}
        file_put_contents("$_fn$m", $new);
        $php->unbind();
        echo " $diff $fn\n";
    }
});
