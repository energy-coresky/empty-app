<?php

# this is auto generated file, do not edit

return[
    ['Assets-coresky', 'if ($cnt && \'m\' == $surl[0])
    return $surl[0] = \'etc\';//', '1', '/m/{0}'],
    1 => [
        'Assets-wares',
        'if (3 == $cnt && \'w\' == $surl[0]) {
    array_shift($surl);
    $surl[2] = $surl[0];
    return $surl[0] = \'etc\';
}',
        '1',
        '/w/{1}/{0}',
    ],
    2 => ['No-map-file', 'if (\'.map\' === substr($uri, -4))
    return $surl = [\'etc\', \'_.map\'];', '0', 'file.map'],
    3 => [
        'Pagination',
        'if ($cnt && preg_match("/^p\\d+$/", $surl[0])) {
    common_c::$page = (int)substr($surl[0], 1);
    array_shift($surl);
    $cnt--;
}',
        '0',
        '/page-2/acl',
    ],
    4 => [
        'Robots.txt',
        'if (\'robots.txt\' == $uri)
    return array_unshift($surl, \'etc\');
if ($cnt && \'etc\' == $surl[0])
    return $surl[0] = \'-\';',
        '0',
        '/robots.txt',
    ],
    5 => [
        'Tune-Upload',
        'if ($cnt && \'upload\' == $surl[0]) {
    common_c::$tune = array_shift($surl);
    $cnt--;
}
',
        '0',
        '',
    ],
    6 => [
        'Tune-ACL',
        'if ($cnt && \'ctrl\' == $surl[0]) {
    common_c::$tune = array_shift($surl);
    $cnt--;
}',
        '0',
        '/ctrl/acl',
    ],
];
