<?php

use app\models\MasterProvinsi;
use kartik\date\DatePicker;
use kartik\depdrop\DepDrop;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MasterPegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'tanggal_lahir')->textInput(['maxlength' => true]) ?> -->

    <p>
        <?php
        echo $form->field($model, 'tanggal_lahir')->widget(DatePicker::class, [
            'options' => ['placeholder' => 'Tanggal'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                'orientation' => 'bottom',
            ]
        ]);
        ?>
    </p>

    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <?php
    // Parent 
    $provinsiList = MasterProvinsi::find()->select(['prov_id', 'prov_name'])->all();
    $provinsiListMap = ArrayHelper::map($provinsiList, 'prov_id', 'prov_name');
    // echo $form->field($model, 'provinsi')->dropDownList(
    //     $provinsiListMap,
    //     [
    //         'id' => 'provinsiParent',
    //         'prompt' => 'pilih provinsi',
    //     ]
    // );

    // Normal select with ActiveForm & model
    echo $form->field($model, 'provinsi')->widget(Select2::classname(), [
        'data' => $provinsiListMap,
        'language' => 'id',
        'options' => ['placeholder' => 'Pilih', 'id' => 'provinsiParent'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);

    // Child # 1
    echo $form->field($model, 'kabupaten')->widget(DepDrop::classname(), [
        'type' => DepDrop::TYPE_SELECT2,
        'pluginOptions' => [
            'depends' => ['provinsiParent'],
            'placeholder' => 'Pilih',
            'url' => Url::to(['/common/depdropkabupaten']),
            'allowClear' => true
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>