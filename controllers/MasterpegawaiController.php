<?php

namespace app\controllers;

use app\components\AccessControl;
use app\models\MasterPegawai;
use app\models\MasterPegawaiSearch;
use app\models\MasterProvinsi;
use Faker\Factory;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterpegawaiController implements the CRUD actions for MasterPegawai model.
 */
class MasterpegawaiController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
                'access' => [
                    'class' => AccessControl::class
                ]
            ]
        );
    }

    /**
     * Lists all MasterPegawai models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterPegawaiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        // $dataProvider = new ActiveDataProvider([
        //     'query' => MasterPegawai::find(),
        //     /*
        //     'pagination' => [
        //         'pageSize' => 10
        //     ],
        //     'sort' => [
        //         'defaultOrder' => [
        //             'id' => SORT_DESC,
        //         ]
        //     ],
        //     */
        // ]);

        return $this->render('indexKartik', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ]);
    }

    /**
     * Displays a single MasterPegawai model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MasterPegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MasterPegawai();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MasterPegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            // $model->provinsi = MasterProvinsi::findOne($model->provinsi)->prov_name;
            // $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MasterPegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        // return $this->redirect(['index']);
        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the MasterPegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return MasterPegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MasterPegawai::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDemodata()
    {
        try {
            $faker = Factory::create("id_ID");
            $model = new MasterPegawai();
            $model->nama = $faker->name();
            $model->nama_ayah = $faker->name("male");
            $model->nama_ibu = $faker->name("female");
            $model->tempat_lahir = $faker->city();
            $model->tanggal_lahir = $faker->date();
            $model->no_ktp = $faker->nik();
            // $model->no_ktp = $faker->numerify("313#############");
            $model->no_telp = $faker->numerify("0812########");
            $model->save();
            // dd($model);
            return $this->redirect(Yii::$app->request->referrer);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
