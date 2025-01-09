<?php

namespace app\controllers;

use app\components\AccessControl;

class HomeController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('indexSimpel');
        // return $this->renderPartial("/layouts/zircoHtml");
    }

    public function actionStarter()
    {
        return $this->render('starter');
    }

    public function actionLogout()
    {
        $access = new AccessControl();
        $access->flushLoginSession();
        
        return $this->redirect("/login");
    }
}
