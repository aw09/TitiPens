<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_tipers".
 *
 * @property int $idordertipers
 * @property int $fee
 * @property int $lokasi_id
 * @property int $user_id
 * @property string $catatan
 *
 * @property Lokasi $lokasi
 * @property Pengguna $user
 */
class Order_Tipers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_tipers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fee', 'lokasi_id', 'user_id', 'catatan'], 'required'],
            [['fee', 'lokasi_id', 'user_id'], 'integer'],
            [['catatan'], 'string'],
            [['lokasi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lokasi::className(), 'targetAttribute' => ['lokasi_id' => 'idlokasi']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['user_id' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idordertipers' => 'Idordertipers',
            'fee' => 'Fee',
            'lokasi_id' => 'Lokasi ID',
            'user_id' => 'User ID',
            'catatan' => 'Catatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLokasi()
    {
        return $this->hasOne(Lokasi::className(), ['idlokasi' => 'lokasi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Pengguna::className(), ['iduser' => 'user_id']);
    }
}
