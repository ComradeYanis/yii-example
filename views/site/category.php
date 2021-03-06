<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['header_title'];
$this->params['breadcrumbs'][] = ['label' => 'Category', 'url' => ['site/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-category">
    <div class="body-content">
        <div class="row">
            <?php foreach ($pages as $page) {?> 
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                <h2><?php echo $page['name'] ?></h2>
                <a href="<?= \yii\helpers\Url::to(['site/page','page' => $page->name])?>">Go!</a>
            </div>
            <?php }?>
        </div>
    <div align="center"><?= \yii\widgets\LinkPager::widget(['pagination' => $pageSize]) ?></div>        
    </div>
</div>