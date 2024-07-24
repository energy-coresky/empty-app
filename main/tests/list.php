<?php

call_user_func(function() {
    fseek($fp = fopen(__FILE__, 'r'), __COMPILER_HALT_OFFSET__);
    $list = explode("\n~~\n", unl(stream_get_contents($fp)));
    fclose($fp);
    foreach ($list as $n => $one) {
        [$y, $eq] = explode("\n~\n", $one, 2);
        $yml = YML::text($y);
        $yy = !is_string($yml) ? var_export($yml, 1) : $yml;
        if ($yy !== $eq) {
            echo "\nYaml: \n$y\n";
            echo 'In test: ' . $eq . "\n";
            echo 'Result: ' . $yy . "\n";
            return;
        } else {
            echo ++$n . " ";
        }
    }
    echo "\nTests passed OK";
});

__halt_compiler();
~
array (
)
~~
-
~
array (
  0 => NULL,
)
~~
-
#
~
array (
  0 => NULL,
)
~~
+
~
NULL
~~
#

+ xxx
~
xxx
~~
#

-
#
~
array (
  0 => NULL,
)
~~
#
- 11 #
#
#+ abc
~
array (
  0 => 11,
)
~~
aa: bb
 nn:mm

~
array (
  'aa' => 'bb nn:mm',
)
~~
aa: bb
nn: mm
~
array (
  'aa' => 'bb',
  'nn' => 'mm',
)
~~
-
- for: @eval($v.='1')'2'@xxx 3

  s:

  x: 2
~
array (
  0 => NULL,
  1 => 
  array (
    'for' => '\'2\'@xxx 31',
    's' => NULL,
    'x' => 2,
  ),
)
~~
-
- for: @eval($v.='1')@eval($v.='2')'3' 4

  s:

  x: 2
~
array (
  0 => NULL,
  1 => 
  array (
    'for' => '\'3\' 421',
    's' => NULL,
    'x' => 2,
  ),
)