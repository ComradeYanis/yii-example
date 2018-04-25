<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['title_page'];
?>
<div class="site-category">
    <div class="body-content">
        <h2><?php echo $page['name'] ?></h2>
        <p><?php echo $page['description']?></p>
    </div>
</div>