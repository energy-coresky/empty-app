<?php

(function() use ($m) {
    $list = glob(DIR_S . '/w2/*.php') + [
        -1 => DIR_S . '/sky.php',
        -2 => DIR_S . '/sky',
        -3 => 'xsp.php',
    ];
    $list = array_combine($list, array_map(fn($v) => basename($v), $list));
    $list = array_unique($list);
    $fp = fopen(__FILE__ . '.test', 'w');
    foreach ($list as $path => $fn) {
        $old = is_file($_fn = "main/tests/files/$fn") ? file_get_contents($_fn) : "\n\n\n";
        $php = PHP::file($path);
        file_put_contents("$_fn$m", $new = (string)$php);
       $diff = '?';
        try {
            $rN = Display::diff($new, $old);
            if ($diff = strlen($rN) - substr_count($rN, '=')) {
                fputs($fp, "$fn DIFF = $diff\n");
                $new = explode("\n", unl($new));
                $old = explode("\n", unl($old));
                $on = $ol = '';
                if ($diff < 9) for ($i = 0, $n = $l = 1, $cnt = strlen($rN); $i < $cnt; $i++) {
                    $d = $rN[$i];
                    if ('=' != $d) {
                        $on .= "  $n | " . ('.' != $d ? $new[$n - 1] : '') . "\n";
                        $ol .= "  $l | " . ('+' != $d ? $old[$l - 1] : '') . "\n";
                    }
                    '.' == $d or $n++;
                    '+' == $d or $l++;
                }
                if ($on)
                    fputs($fp, " new =====\n$on old =====\n$ol");
            } else {
                $diff = '.';
            }
        } catch (throwable $e) {}
        
        echo " $diff $fn\n";
    }
})();
