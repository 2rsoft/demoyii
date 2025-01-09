<?php

namespace app\controllers;

use app\models\MasterKabupaten;
use Yii;
use yii\helpers\ArrayHelper;

class CommonController extends \yii\web\Controller
{

    public $enableCsrfValidation = false;

    public function actionError()
    {
        $error = Yii::$app->getErrorHandler()->exception;
        $this->layout = "zirco";

        // dd($error);

        if ($error !== null) {
            return $this->render("/home/error", [
                'error' => $error
            ]);
        }
    }

    public function actionDepdropkabupaten()
    {
        // $model = MasterKabupaten::find()->select(['city_id','city_name'])->all();
        // $modelMap = ArrayHelper::map($model,'city_id','city_name');
        // // return Yii::$app->response->json_encode($modelMap);
        // return $this->asJson($modelMap);

        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $cat_id = $parents[0];
                $masterKabupatenList = MasterKabupaten::find()
                ->select(['city_name as id', 'city_name as name'])
                ->where(['prov_id' => $cat_id])->asArray()->all();
                
                // $out = (count($masterKabupatenList)==0) ? ["=>"] : $masterKabupatenList; 
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                return ['output' => $masterKabupatenList, 'selected' => ''];
            }
        }
        return ['output' => '', 'selected' => ''];
    }
}
