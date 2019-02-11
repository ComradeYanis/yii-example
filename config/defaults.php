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
];

$path_local = __DIR__ . '/defaults.local.php';

if(file_exists($path_local)){

    $defaults = \yii\helpers\ArrayHelper::merge($defaults, require $path_local);
}

return $defaults;