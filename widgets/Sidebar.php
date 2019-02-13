<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.02.19
 * Time: 12:18
 */

namespace app\widgets;


use app\models\Categorys;
use yii\base\Widget;

class Sidebar extends Widget
{
    public function run()
    {
        return $this->render('sidebar', [
            'categories' => Categorys::getForMain()
        ]);
    }

}