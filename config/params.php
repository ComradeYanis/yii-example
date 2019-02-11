<?php

$params = [

];

$path_local = __DIR__ . '/params.local.php';

if(file_exists($path_local)){

    $params = \yii\helpers\ArrayHelper::merge($params, require $path_local);
}

return $params;
