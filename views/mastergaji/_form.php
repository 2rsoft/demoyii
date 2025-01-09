<?php

use app\helpers\StringHelper;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MasterGaji $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-gaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'pegawai_id')->textInput() ?> -->

    <?php
    // Usage with ActiveForm and model
    echo $form->field($model, 'pegawai_id')->widget(Select2::class, [
        'data' => ArrayHelper::map($model->getPegawaiList(), 'id', 'nama'),
        'options' => ['placeholder' => 'pilih pegawai'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <!-- <?= $form->field($model, 'bulan')->textInput() ?> -->
    <?php
    // Usage with ActiveForm and model
    echo $form->field($model, 'bulan')->widget(Select2::class, [
        'data' => StringHelper::getBulanList(),
        'options' => ['placeholder' => 'bulan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'tahun')->textInput(['type' => 'number', 'min' => 0, 'value' => date('Y')]) ?>

    <?= $form->field($model, 'gaji_pokok')->textInput() ?>

    <?= $form->field($model, 'tunjangan_jabatan')->textInput() ?>

    <?= $form->field($model, 'tunjangan_kinerja')->textInput() ?>

    <?= $form->field($model, 'pot_bpjskes')->textInput() ?>

    <?= $form->field($model, 'pot_bpjsket')->textInput() ?>

    <!-- <?= $form->field($model, 'tanggal')->textInput() ?> -->

    <p>
        <?php
        echo $form->field($model, 'tanggal')->widget(DatePicker::class, [
            'options' => ['placeholder' => 'Tanggal Gaji'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
            ]
        ]);
        ?>
    </p>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>