<?php

/** @var $pages \app\models\Pages[]*/

$this->title = 'Main page';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="body-content">
        <!-- SLIDER -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="la.jpg" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="chicago.jpg" alt="Chicago">
                </div>

                <div class="item">
                    <img src="ny.jpg" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row">
            <?php if($pages){?>
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
