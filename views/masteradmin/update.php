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

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
