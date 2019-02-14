<?php

/** @var $this yii\web\View */
/** @var $page \app\models\Pages */
/** @var $category \app\models\Categorys */

$this->title =  $data['title_page'];

if(!empty($category)){
	$this->params['breadcrumbs'][] = ['label' => $category['name'], 'url' => ['site/category', 'category' => $category->name]];
}

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-category">
    <div class="body-content">
        <h2><?= $page->name ?></h2>
        <p><?= $page->description ?></p>
    </div>
</div>