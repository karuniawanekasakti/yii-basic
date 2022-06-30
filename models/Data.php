<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id_data
 * @property string $nama
 * @property string $alamat
 * @property string $umur
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'umur'], 'required'],
            [['nama', 'alamat'], 'string', 'max' => 200],
            [['umur'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_data' => 'Id Data',
            'nama' => 'Nama Lengkap',
            'alamat' => 'Alamat',
            'umur' => 'Umur',
        ];
    }
}