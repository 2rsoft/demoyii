<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provinces".
 *
 * @property int $prov_id
 * @property string|null $prov_name
 * @property int|null $locationid
 * @property int|null $status
 */
class MasterProvinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provinces';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['locationid', 'status'], 'integer'],
            [['prov_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prov_id' => Yii::t('app', 'Prov ID'),
            'prov_name' => Yii::t('app', 'Prov Name'),
            'locationid' => Yii::t('app', 'Locationid'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
