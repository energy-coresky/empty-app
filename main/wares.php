<?php

# this is auto generated file, do not edit

return array (
  'earth' => 
  array (
    'path' => 'vendor/coresky/earth',
    'class' => 
    array (
    ),
    'tune' => '',
  ),
  'venus' => 
  array (
    'path' => 'vendor/coresky/venus',
    'class' => 
    array (
    ),
    'tune' => '',
  ),
  'upload' => 
  array (
    'path' => 'vendor/coresky/upload',
    'class' => 
    array (
      0 => 'default_c',
    ),
    'tune' => 'upload',
    'options' => 
    array (
      'connection' => 'core',
      'table' => 'file',
      'dir' => 'var/upload',
      'use_acl' => '0',
      'crop_sizes' => '200 x 200,200 x 500',
    ),
  ),
  'acl' => 
  array (
    'path' => 'vendor/coresky/acl',
    'class' => 
    array (
      0 => 'c_acl',
      1 => 'ACM',
    ),
    'tune' => 'ctrl',
    'options' => 
    array (
      'connection' => 'core',
      'tt' => 'acl',
      'log' => '1',
      'pap' => '0',
      'ipp' => '17',
      'uname' => true,
    ),
  ),
  'mercury' => 
  array (
    'path' => 'vendor/coresky/mercury',
    'class' => 
    array (
    ),
    'tune' => '',
  ),
);
