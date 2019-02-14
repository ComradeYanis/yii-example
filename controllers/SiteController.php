<?php

namespace app\controllers;

use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Categorys;
use app\models\Pages;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index',[
            'pages'     => Pages::getForMain()
        ]);
    }

    /**
     * @param $category
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionCategory($category)
    {
        if($category = Categorys::findOne(['name' => $category])) {
            $data = [];

            $pageQuery = Pages::find()
                ->select('id, id_category, name, description')
                ->where(['id_category' => $category->id]);

            $pageSize = new Pagination(['totalCount' => $pageQuery->count(), 'pageSize' => 10]);
            $pages = $pageQuery->offset($pageSize->offset)->limit($pageSize->limit)->all();

            $data['header_title'] = $category->name;
            $data['title_page'] = $category->name;

            return $this->render('category', [
                'data'      => $data,
                'pages'     => $pages,
                'pageSize'  => $pageSize
            ]);
        } else {
            throw new NotFoundHttpException('No such category...');
        }
    }

    /**
     * @param $page
     * @return string
     * @throws \yii\web\HttpException
     */
    public function actionPage($page)
    {
        if($page = Pages::findOne(array('name' => $page))) {

            $data = [];

            $data['header_title'] = $page->name;
            $data['title_page'] = $page->name;

            return $this->render('page.php', [
                'data' => $data,
                'page'  => $page,
                'category'  => $page->category
            ]);
        } else {
            throw new NotFoundHttpException('No such page...');
        }
    }
}
