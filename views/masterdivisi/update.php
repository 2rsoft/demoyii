<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterDivisi $model */

$this->title = 'Update Master Divisi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Master Divisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="master-divisi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
