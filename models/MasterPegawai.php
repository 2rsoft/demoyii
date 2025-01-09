<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "m_pegawai".
 *
 * @property int $id
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string|null $nama_ayah
 * @property string|null $nama_ibu
 * @property string $no_ktp
 * @property string $no_telp
 */
class MasterPegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tempat_lahir', 'tanggal_lahir', 'no_ktp', 'no_telp', 'provinsi', 'kabupaten'], 'required'],
            [['nama', 'tempat_lahir', 'tanggal_lahir', 'nama_ayah', 'nama_ibu', 'no_ktp', 'no_telp'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'nama_ayah' => 'Nama Ayah',
            'nama_ibu' => 'Nama Ibu',
            'no_ktp' => 'No Ktp',
            'no_telp' => 'No Telp',
            'provinsi' => 'Provinsi',
            'kabupaten' => 'Kabupaten',
        ];
    }

    public function getTempatLahirList()
    {
        $tempat_lahir_list = $this->find()->select(['tempat_lahir'])->all();
        // dd($tempat_lahir_list);
        return $tempat_lahir_list;
    }
}
