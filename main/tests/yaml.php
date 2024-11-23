<?php

call_user_func(function() {
    $list = explode("\n~~\n", "\n" . unl(Boot::tail(__FILE__, __COMPILER_HALT_OFFSET__)));
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
~~
- [
  @left(_) a
]
~
array (
  0 => 
  array (
    0 => '_a',
  ),
)
~~
+ [0]
~
array (
  0 => 0,
)