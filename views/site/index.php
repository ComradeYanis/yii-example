<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

/** @var $pages \app\models\Pages[]*/

$this->title = 'Categorys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php if($pages){?>
                <h1>Pages without category</h1>
                <?php foreach ($pages as $page) {?> 
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> 
                    <h2><?= $page->name ?></h2>
                    <a href="<?= \yii\helpers\Url::to(['site/page','page' => $page->name])?>">Go!</a>
                </div>
            <?php }
        }?>
        </div>

    </div>

</div>
