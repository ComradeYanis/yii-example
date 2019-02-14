<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.02.19
 * Time: 15:46
 */

namespace app\widgets;

use yii\base\Widget;

class Slider extends Widget
{
    public function run()
    {
        return $this->render('slider' , []);
    }
}