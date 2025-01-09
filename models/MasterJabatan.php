<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "m_jabatan".
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 */
class MasterJabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi'], 'required'],
            [['deskripsi'], 'string'],
            [['judul'], 'string', 'max' => 50],
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
