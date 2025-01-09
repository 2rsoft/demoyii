<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterAdmin $model */

$this->title = 'Ubah Admin: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Master Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php

use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MasterAdmin $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="master-admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id')->textInput() ?> -->

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    <p>
    <span>Ganti dengan kata sandi yang baru</span>
    </p>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


</div>
