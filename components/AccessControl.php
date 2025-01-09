<?php

namespace app\components;

use app\models\MasterAdmin;
use Yii;
use yii\helpers\Url;

class AccessControl
{
    public function attach()
    {
        $session = Yii::$app->session->get('user_id');
        if($session == null) {
            return Yii::$app->response->redirect('/login');die();
        }
    }

    public function flushLoginSession()
    {
        Yii::$app->session->remove('user_id');
    }
}