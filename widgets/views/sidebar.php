<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13.02.19
 * Time: 12:19
 */

/** @var $categories \app\models\Categorys[] */
?>
<div class="panel-group">

    <!-- START OF Categories -->

    <?php if($categories): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Categories
        </div>

        <ul class="list-group">
        <?php foreach ($categories as $category): ?>
            <li class="list-group-item">
                <a href="<?= \yii\helpers\Url::to(['site/category','category' => $category->name])?>"><?= $category->name ?></a>
            </li>
        <?php endforeach;?>
        </ul>
    </div>
    <?php endif; ?>

    <!-- END OF Categories -->
    <!-- START OF Tags -->
</div>
