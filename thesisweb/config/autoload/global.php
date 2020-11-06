<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
use Laminas\Session\Validator\HttpUserAgent;
use Laminas\Session\Validator\RemoteAddr;
return [
    // ...
    'db' => [
        'driver'   => 'Pdo',
        'username' => 'root',
        'password' => '',
        'dsn'            => 'mysql:dbname=informatics_learning_primary;host=127.0.0.1;charset=utf8;port=3306',
    ],
    'service_manager' => [
        'factories' => [
            'Laminas\Db\Adapter\Adapter' => 'Laminas\Db\Adapter\AdapterServiceFactory'
        ]
    ],
    'session_config' => [
        'cookie_lifetime' => 60*60*3,
        // Session lưu 30 trên server
        'gc_maxlifetime'     => 60*60*24*30,
    ],
    
    'session_storage' => [
        'type' => SessionArrayStorage::class,
    ],
    
    'session_manager' => [
        'validators' => [
            //Thêm các Validator khi tạo Session, nếu không thỏa mãn
            //validator sẽ dẫn tới lỗi tạo Session
            \Laminas\Session\Validator\RemoteAddr::class,
            \Laminas\Session\Validator\HttpUserAgent::class,
        ],
    ],
];
