<?php

namespace app\modules\crud\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property int $id_kontak
 * @property string $nama
 * @property string $perusahaan
 * @property string $jabatan
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'perusahaan', 'jabatan'], 'required'],
            [['nama', 'perusahaan', 'jabatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kontak' => 'Id Kontak',
            'nama' => 'Nama',
            'perusahaan' => 'Perusahaan',
            'jabatan' => 'Jabatan',
        ];
    }
}
