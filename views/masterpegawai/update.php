<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterPegawai $model */

$this->title = 'Ubah Pegawai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Master Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-pegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
