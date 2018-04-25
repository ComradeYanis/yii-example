<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;
use app\models\Categorys;
use app\models\Pages;
// use app\models\LoginForm;
// use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
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
        $categorys = Categorys::find()->select('id, name')->orderBy('name DESC')->all();
        $pages = Pages::find()->select('id, name')->where('id_category=0')->all();
        return $this->render('index', compact('categorys', 'pages'));
    }

    public function actionCategory()
    {
        $category_name = Yii::$app->request->get('category');
        $data = array();
        $category = Categorys::findOne(array('name' => $category_name));
        if (empty($category)) throw new \yii\web\HttpException(404, 'No such category...');
        $pages = Pages::find()
            ->select('id_category, name')
            ->where(['id_category' => $category->id])
            ->all();
        $data['header_title'] = $category->name;
        $data['title_page'] = $category->name;
        return $this->render('category.php', compact('data', 'category', 'pages'));
    }

    public function actionPage()
    {
        $page_name = Yii::$app->request->get('page');
        $data = array();
        $page = Pages::findOne(array('name' => $page_name));

        if (empty($page)) throw new \yii\web\HttpException(404, 'No such page...');
        $data['header_title'] = $page->name;
        $data['title_page'] = $page->name;
        return $this->render('page.php', compact('data','page'));
    }

    // /**
    //  * Login action.
    //  *
    //  * @return Response|string
    //  */
    // public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     }

    //     $model->password = '';
    //     return $this->render('login', [
    //         'model' => $model,
    //     ]);
    // }

    // /**
    //  * Logout action.
    //  *
    //  * @return Response
    //  */
    // public function actionLogout()
    // {
    //     Yii::$app->user->logout();

    //     return $this->goHome();
    // }

    // *
    //  * Displays contact page.
    //  *
    //  * @return Response|string
     
    // public function actionContact()
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
    //         Yii::$app->session->setFlash('contactFormSubmitted');

    //         return $this->refresh();
    //     }
    //     return $this->render('contact', [
    //         'model' => $model,
    //     ]);
    // }

    // /**
    //  * Displays about page.
    //  *
    //  * @return string
    //  */
    // public function actionAbout()
    // {
    //     return $this->render('about');
    // }
}
