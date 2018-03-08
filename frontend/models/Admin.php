<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property string $id_admin
 * @property string $nama
 * @property string $uname
 * @property string $password
 * @property string $alamat
 * @property string $desa
 * @property string $kecamatan
 * @property string $jk
 * @property string $kriteria
 * @property string $no_telp
 *
 * @property Kuliner[] $kuliners
 * @property Penginapan[] $penginapans
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_admin', 'nama', 'uname', 'password', 'alamat', 'desa', 'kecamatan', 'jk', 'kriteria', 'no_telp'], 'required'],
            [['jk', 'kriteria'], 'string'],
            [['id_admin'], 'string', 'max' => 50],
            [['nama', 'desa', 'kecamatan'], 'string', 'max' => 100],
            [['uname', 'no_telp'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 10],
            [['alamat'], 'string', 'max' => 250],
            [['uname'], 'unique'],
            [['id_admin'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'nama' => 'Nama',
            'uname' => 'Uname',
            'password' => 'Password',
            'alamat' => 'Alamat',
            'desa' => 'Desa',
            'kecamatan' => 'Kecamatan',
            'jk' => 'Jk',
            'kriteria' => 'Kriteria',
            'no_telp' => 'No Telp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuliners()
    {
        return $this->hasMany(Kuliner::className(), ['id_admin' => 'id_admin']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenginapans()
    {
        return $this->hasMany(Penginapan::className(), ['id_admin' => 'id_admin']);
    }
}
