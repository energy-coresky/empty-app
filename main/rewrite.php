<?php

# this is auto generated file, do not edit

return array (
  0 => 
  array (
    0 => 'Assets-coresky',
    1 => 'if ($cnt && \'m\' == $surl[0])
    return $surl[0] = \'etc\';',
    2 => '1',
    3 => '/m/{0}',
  ),
  1 => 
  array (
    0 => 'Assets-wares',
    1 => 'if (3 == $cnt && \'w\' == $surl[0]) {
    array_shift($surl);
    $surl[2] = $surl[0];
    return $surl[0] = \'etc\';
}',
    2 => '1',
    3 => '/w/{1}/{0}',
  ),
  2 => 
  array (
    0 => 'No-map-file',
    1 => 'if (\'.map\' === substr($uri, -4))
    return $surl = [\'etc\', \'_.map\'];',
    2 => '0',
    3 => 'file.map',
  ),
  3 => 
  array (
    0 => 'Pagination',
    1 => 'if ($cnt && preg_match("/^p\\d+$/", $surl[0])) {
    common_c::$page = (int)substr($surl[0], 1);
    array_shift($surl);
    $cnt--;
}',
    2 => '0',
    3 => '/page-2/acl',
  ),
  4 => 
  array (
    0 => 'Robots.txt',
    1 => 'if (\'robots.txt\' == $uri)
    return array_unshift($surl, \'etc\');
if ($cnt && \'etc\' == $surl[0])
    return $surl[0] = \'-\';',
    2 => '0',
    3 => '/robots.txt',
  ),
  5 => 
  array (
    0 => 'Tune-Upload',
    1 => 'if ($cnt && \'upload\' == $surl[0]) {
    common_c::$tune = array_shift($surl);
    $cnt--;
}
',
    2 => '0',
    3 => '',
  ),
  6 => 
  array (
    0 => 'Tune-ACL',
    1 => 'if ($cnt && \'ctrl\' == $surl[0]) {
    common_c::$tune = array_shift($surl);
    $cnt--;
}',
    2 => '0',
    3 => '/ctrl/acl?{0}',
  ),
);
