<?php

namespace app\controllers;

use app\helpers\StringHelper;
use app\models\MasterAdmin;
use kartik\growl\Growl;
use Yii;
use yii\web\Request;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('/home/login');
    }

    public function actionAuthlogin(Request $request)
    {
        $model = MasterAdmin::find()->where(
            [
                'username' => $request->post('username'),
            ]
        )->one();
        if ($model != null) {
            if (!StringHelper::ValidateHashedPassword($request->post('password'), $model->password)) {
                Yii::$app->session->setFlash('error', 'kata sandi salah');
                return $this->redirect('/login');
            }
            Yii::$app->session->set('user_id', $model->id);
            return $this->redirect('/home');
        } else {
            Yii::$app->session->setFlash('error', 'pengguna tidak ditemukan');
            return $this->redirect('/login');
        }
    }
}
