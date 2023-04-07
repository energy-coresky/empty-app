<?php

# this is auto generated file, do not edit

return array (
  0 => 
  array (
    0 => 'Standard',
    1 => 'global $sky;
$_0 = $cnt ? $surl[0] : \'\';',
    2 => '0',
    3 => '/a /a',
  ),
  1 => 
  array (
    0 => 'Assets',
    1 => 'if (\'m\' == $_0)
    return $surl[0] = \'etc\';',
    2 => '1',
    3 => '/m/sky.js /etc/sky.js',
  ),
  2 => 
  array (
    0 => 'Dev-tools',
    1 => 'if ($sky->_0 && \'_\' == $sky->_0[0])
    return;',
    2 => '1',
    3 => '/a /a',
  ),
  3 => 
  array (
    0 => 'Main-page',
    1 => '$main = \'\' === URI;
if ($main || \'main\' === URI)
    return $surl = $main ? [\'main\'] : [];',
    2 => '0',
    3 => '/ /main',
  ),
  4 => 
  array (
    0 => 'Robots.txt',
    1 => 'if (\'robots.txt\' == URI)
    return array_unshift($surl, \'etc\');',
    2 => '0',
    3 => '/robots.txt /etc/robots.txt',
  ),
);
