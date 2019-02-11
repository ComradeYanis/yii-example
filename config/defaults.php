<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11.02.19
 * Time: 9:41
 */

$defaults = [
    'basePath' => dirname(__DIR__),
    'timeZone' => 'UTC',
    'components' => [
        'db' => [
            'class'             => 'yii\db\Connection',
            'dsn'               => 'mysql:host=localhost;dbname=db_name',
            'username'          => 'db_user_name',
            'password'          => 'db_password',
            'charset'           => 'utf8',
            'tablePrefix'       => '',
            'enableSchemaCache' => true,
            'enableQueryCache'  => true,
        ],
    ],
];

$path_local = __DIR__ . '/defaults.local.php';

if(file_exists($path_local)){

    $defaults = \yii\helpers\ArrayHelper::merge($defaults, require $path_local);
}

return $defaults;