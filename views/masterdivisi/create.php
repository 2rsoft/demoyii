<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MasterDivisi $model */

$this->title = 'Create Master Divisi';
$this->params['breadcrumbs'][] = ['label' => 'Master Divisis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-divisi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
