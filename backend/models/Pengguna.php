<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $iduser
 * @property int $hak_akses
 * @property int $nrp
 * @property string $nama
 * @property string $jurusan
 * @property int $angkatan
 * @property string $foto
 * @property double $rating
 * @property string $password
 *
 * @property HistoryCustomer[] $historyCustomers
 * @property HistoryTipers[] $historyTipers
 * @property Keranjang[] $keranjangs
 * @property OrderCustomer[] $orderCustomers
 * @property OrderTipers[] $orderTipers
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nrp', 'angkatan'], 'integer'],
            [['nrp', 'nama', 'jurusan', 'angkatan', 'password'], 'required'],
            [['rating'], 'number'],
            [['nama', 'foto'], 'string', 'max' => 255],
            [['jurusan', 'password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'nrp' => 'Nrp',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
            'angkatan' => 'Angkatan',
            'foto' => 'Foto',
            'rating' => 'Rating',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryCustomers()
    {
        return $this->hasMany(HistoryCustomer::className(), ['user_id' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistoryTipers()
    {
        return $this->hasMany(HistoryTipers::className(), ['user_id' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeranjangs()
    {
        return $this->hasMany(Keranjang::className(), ['user_id' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderCustomers()
    {
        return $this->hasMany(OrderCustomer::className(), ['user_id' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderTipers()
    {
        return $this->hasMany(OrderTipers::className(), ['user_id' => 'iduser']);
    }
}
