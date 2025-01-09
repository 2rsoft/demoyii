<?php

namespace app\helpers;

use app\models\MasterAdmin;
use NumberFormatter;
use Yii;

class StringHelper
{
    public static function getLoginSession()
    {
        $user = MasterAdmin::find()->where(['id' => Yii::$app->session->get('user_id')])->one();
        return $user;
    }

    public static function HashNewPassword(string $password): string
    {
        return Yii::$app->security->generatePasswordHash(($password));
    }

    public static function ValidateHashedPassword(string $password, string $hashPassword)
    {
        if (Yii::$app->security->validatePassword($password, $hashPassword)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getBulanList()
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        return $bulan;
    }

    public static function formatRupiah($rupiah)
    {
        // Yii::$app->formatter->currencyCode = "IDR";
        // Yii::$app->formatter->thousandSeparator = ".";
        // Yii::$app->formatter->decimalSeparator = ",";
        // Yii::$app->formatter->asDecimal(0, null);
        return Yii::$app->formatter->asCurrency($rupiah, "IDR");
    }

    static function tanggal_indo($tanggal)
    {
        $bulan = self::getBulanList();
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
    }
}
