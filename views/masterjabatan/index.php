<?php

use app\models\MasterJabatan;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset;
use johnitvn\ajaxcrud\BulkButtonWidget;
use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MasterJabatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Master Jabatans');
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="master-jabatan-index">
    <div id="ajaxCrudDatatable">
        <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax' => true,
            'columns' => require(__DIR__ . '/_columns.php'),
            'toolbar' => [
                [
                    'content' =>
                    Html::a(
                        '<i class="fab fa-atlassian"></i>',
                        ['create'],
                        ['role' => 'modal-remote', 'title' => 'Form', 'class' => 'btn btn-outline-primary']
                    ) .
                        Html::a(
                            '<i class="fab fa-atlassian"></i>',
                            [''],
                            ['data-pjax' => 1, 'class' => 'btn btn-default btn-outline-danger', 'title' => 'Reset Grid']
                        ) .
                        '{toggleData}' .
                        '{export}'
                ],
            ],
            // 'striped' => true,
            // 'condensed' => true,
            // 'responsive' => true,
            'panel' => [
                'type' => 'primary',
                'heading' => '<i class="glyphicon glyphicon-list"></i> Master Jabatans listing',
                'before' => '<em>* Resize table columns just like a spreadsheet by dragging the column edges.</em>',
                'after' => BulkButtonWidget::widget([
                    'buttons' => Html::a(
                        '<i class="glyphicon glyphicon-trash"></i>&nbsp; Delete All',
                        ["bulk-delete"],
                        [
                            "class" => "btn btn-danger btn-xs",
                            'role' => 'modal-remote-bulk',
                            'data-confirm' => false,
                            'data-method' => false, // for overide yii data api
                            'data-request-method' => 'post',
                            'data-confirm-title' => 'Are you sure?',
                            'data-confirm-message' => 'Are you sure want to delete this item'
                        ]
                    ),
                ]) .
                    '<div class="clearfix"></div>',
            ],
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, MasterJabatan $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //     }
            // ],
        ]) ?>
    </div>
</div>
<?php Modal::begin([
    "id" => "ajaxCrudModal",
    "footer" => "", // always need it for jquery plugin
]) ?>
<?php Modal::end(); ?>