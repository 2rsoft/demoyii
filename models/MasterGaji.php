<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mt_gaji".
 *
 * @property int $id
 * @property int $pegawai_id
 * @property int $bulan
 * @property int $tahun
 * @property float $gaji_pokok
 * @property float $tunjangan_jabatan
 * @property float $tunjangan_kinerja
 * @property float $pot_bpjskes
 * @property float $pot_bpjsket
 * @property string $tanggal
 *
 * @property MasterPegawai $pegawai
 */
class MasterGaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mt_gaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'bulan', 'tahun'], 'integer'],
            [['gaji_pokok', 'tunjangan_jabatan', 'tunjangan_kinerja', 'pot_bpjskes', 'pot_bpjsket'], 'number'],
            [['pegawai_id', 'bulan', 'tahun'], 'required'],
            [['tanggal'], 'required'],
            [['tanggal'], 'safe'],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterPegawai::class, 'targetAttribute' => ['pegawai_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pegawai_id' => 'Pegawai ID',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan_jabatan' => 'Tunjangan Jabatan',
            'tunjangan_kinerja' => 'Tunjangan Kinerja',
            'pot_bpjskes' => 'Pot Bpjskes',
            'pot_bpjsket' => 'Pot Bpjsket',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * Gets query for [[Pegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(MasterPegawai::class, ['id' => 'pegawai_id'])->one();
        
    }

    public function getPegawaiList()
    {
        return MasterPegawai::find()->all();
    }
}
