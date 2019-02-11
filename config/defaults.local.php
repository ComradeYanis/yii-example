<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11.02.19
 * Time: 9:41
 */

return [
    'components' => [
        'db' => [
            'class'             => 'yii\db\Connection',
            'dsn'               => 'mysql:host=localhost;dbname=yii2-base-test',
            'username'          => 'root',
            'password'          => '0361',
            'charset'           => 'utf8',
            'tablePrefix'       => '',
            'enableSchemaCache' => true,
            'enableQueryCache'  => true,
        ],
    ],
];