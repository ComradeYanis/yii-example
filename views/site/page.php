<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title =  $data['title_page'];
$this->params['breadcrumbs'][] = ['label' => 'Category', 'url' => ['site/index']];
if(!empty($category)){
	$this->params['breadcrumbs'][] = ['label' => $category['name'], 'url' => ['site/category', 'category' => $category['name']]];
}
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-category">
    <div class="body-content">
        <h2><?php echo $page['name'] ?></h2>
        <p><?php echo $page['description']?></p>
    </div>
</div>