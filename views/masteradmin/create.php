<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterAdmin $model */

$this->title = 'Tambah Admin';
$this->params['breadcrumbs'][] = ['label' => 'Master Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
