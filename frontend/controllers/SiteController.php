<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Cookie;
use frontend\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];

    }
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index', [
            'users' => $users,
        ]);
    }
    
}
