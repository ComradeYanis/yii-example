<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11.02.19
 * Time: 9:35
 */

$path_local = __DIR__ . '/bootstrap.local.php';

if(file_exists($path_local)){

    require $path_local;
}