<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Categorys';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
        	<?php foreach ($categorys as $category) {?> 
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> 
                <h2><?php echo $category['name'] ?></h2>
                <a href="<?= \yii\helpers\Url::to(['site/category','category' => $category->name])?>">Go!</a>
            </div>
            <?php }?>
        </div>

        <div class="row">
            <?php if(!empty($pages)){?>
                <h1>Pages without category</h1>
                <?php foreach ($pages as $page) {?> 
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6"> 
                    <h2><?php echo $page['name'] ?></h2>
                    <a href="<?= \yii\helpers\Url::to(['site/page','page' => $page->name])?>">Go!</a>
                </div>
            <?php }
        }?>
        </div>

    </div>

</div>
