<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MasterJabatan */
?>
<div class="master-jabatan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            'deskripsi:ntext',
        ],
    ]) ?>

</div>
