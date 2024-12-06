<?php

# this is auto generated file, do not edit

return [
    'earth' => ['path' => 'vendor/coresky/earth', 'class' => [], 'tune' => ''],
    'venus' => ['path' => 'vendor/coresky/venus', 'class' => [], 'tune' => ''],
    'upload' => [
        'path' => 'vendor/coresky/upload',
        'class' => ['default_c'],
        'tune' => 'upload',
        'options' => [
            'connection' => 'core',
            'table' => 'file',
            'dir' => 'var/upload',
            'use_acl' => '0',
            'crop_sizes' => '200 x 200,200 x 500',
        ],
    ],
    'acl' => [
        'path' => 'vendor/coresky/acl',
        'class' => ['c_acl', 'ACM'],
        'tune' => 'ctrl',
        'options' => ['connection' => 'core', 'tt' => 'acl', 'log' => '1', 'pap' => '0', 'ipp' => '17', 'uname' => true],
    ],
    'mercury' => ['path' => 'vendor/coresky/mercury', 'class' => [], 'tune' => ''],
];
