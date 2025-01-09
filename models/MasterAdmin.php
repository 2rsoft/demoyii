<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "m_admin".
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 */
class MasterAdmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'm_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['id'], 'required'],
            [['name'], 'required'],
            [['username'], 'required'],
            [['password'], 'required'],
            // [['id'], 'integer'],
            [['name', 'username', 'password'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
