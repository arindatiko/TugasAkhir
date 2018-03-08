<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property string $id_customer
 * @property string $nama_lengkap
 * @property string $uname
 * @property string $password
 * @property string $alamat
 * @property string $desa
 * @property string $kecamatan
 * @property string $no_telp
 * @property string $email
 * @property string $posisi_lat
 * @property string $posisi_lng
 *
 * @property Pesanan[] $pesanans
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_customer', 'nama_lengkap', 'uname', 'password', 'alamat', 'desa', 'kecamatan', 'no_telp', 'email'], 'required'],
            [['posisi_lat', 'posisi_lng'], 'number'],
            [['id_customer', 'desa', 'kecamatan'], 'string', 'max' => 50],
            [['nama_lengkap', 'email'], 'string', 'max' => 100],
            [['uname'], 'string', 'max' => 20],
            [['password', 'no_telp'], 'string', 'max' => 10],
            [['alamat'], 'string', 'max' => 250],
            [['uname'], 'unique'],
            [['id_customer'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_customer' => 'Nomor Identitas',
            'nama_lengkap' => 'Nama Lengkap',
            'uname' => 'Username',
            'password' => 'Password',
            'alamat' => 'Alamat',
            'desa' => 'Desa',
            'kecamatan' => 'Kecamatan',
            'no_telp' => 'No Telp',
            'email' => 'Email',
            /*'posisi_lat' => 'Posisi Lat',
            'posisi_lng' => 'Posisi Lng',*/
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesanans()
    {
        return $this->hasMany(Pesanan::className(), ['id_customer' => 'id_customer']);
    }
}
