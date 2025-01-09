<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "m_divisi".
 *
 * @property int $id
 * @property string|null $judul
 * @property string $deskripsi
 */
class MasterDivisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_divisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['judul'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'judul' => Yii::t('app', 'Judul'),
            'deskripsi' => Yii::t('app', 'Deskripsi'),
        ];
    }
}
