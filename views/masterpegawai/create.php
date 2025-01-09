<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterPegawai $model */

$this->title = 'Tambah Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Master Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-pegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
