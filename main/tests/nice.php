<?php

(function() use ($m) {
    $list = glob(DIR_S . '/w2/*.php') + [
        -1 => DIR_S . '/sky.php', -2 => DIR_S . '/sky',
        -3 => 'xsp.php',
    ];
    //$list = ['main/tests/zz_test.php'];
    $list = array_combine($list, array_map(fn($v) => basename($v), $list));
    $list = array_unique($list);
    $fp = fopen(__FILE__ . '.diff', 'w');
    PHP::$autocomma = false;
    
    foreach ($list as $path => $fn) {
        $old = is_file($_fn = "main/tests/files/$fn") ? file_get_contents($_fn) : "\n\n\n";
        file_put_contents("$_fn$m", $new = (string)PHP::file($path));
        [$out, $add, $sub] = Display::diffx($new, $old);
        $diff = ($sub ? "-$sub" : '') . ($add ? "+$add" : '');
        $out && fputs($fp, sprintf("@@ %s @@ $fn\n", $diff) . ($add + $sub < 9 ? $out : ''));
        echo $out ? " $diff $fn\n" : " . $fn\n";
    }
})();
