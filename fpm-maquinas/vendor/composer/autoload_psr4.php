<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'Leaf\\Http\\' => array($vendorDir . '/leafs/http/src'),
    'Leaf\\' => array($vendorDir . '/leafs/anchor/src', $vendorDir . '/leafs/bareui/src', $vendorDir . '/leafs/exception/src', $vendorDir . '/leafs/leaf/src', $vendorDir . '/leafs/router/src'),
    'Front\\' => array($baseDir . '/src/Front'),
    'Faker\\' => array($vendorDir . '/fakerphp/faker/src/Faker'),
);
