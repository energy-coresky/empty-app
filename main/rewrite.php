<?php

# this is auto generated file, do not edit

return array (
  0 => 
  array (
    0 => 'Main-page',
    1 => '$main = \'\' === $uri;
if ($main || \'main\' === $uri)
    return $surl = $main ? [\'main\'] : [];',
    2 => '0',
    3 => '/',
  ),
  1 => 
  array (
    0 => 'Assets-coresky',
    1 => 'if ($cnt && \'m\' == $surl[0])
    return $surl[0] = \'etc\';',
    2 => '1',
    3 => '/m/{0}',
  ),
  2 => 
  array (
    0 => 'Robots.txt',
    1 => 'if (\'robots.txt\' == $uri)
    return array_unshift($surl, \'etc\');
if ($cnt && \'etc\' == $surl[0])
    return $surl[0] = \'-\';',
    2 => '0',
    3 => '/robots.txt',
  ),
);
