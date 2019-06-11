<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order_customer".
 *
 * @property int $idordercustomer
 * @property string $tanggal
 * @property int $user_id
 * @property string $lokasi
 * @property string $catatan
 * @property int $total
 *
 * @property Pengguna $user
 * @property OrderItemCustomer[] $orderItemCustomers
 * @property StatusOrder[] $statusOrders
 */
class OrderCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'user_id', 'lokasi', 'catatan', 'total'], 'required'],
            [['tanggal'], 'safe'],
            [['user_id', 'total'], 'integer'],
            [['catatan'], 'string'],
            [['lokasi'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['user_id' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idordercustomer' => 'Idordercustomer',
            'tanggal' => 'Tanggal',
            'user_id' => 'User ID',
            'lokasi' => 'Lokasi',
            'catatan' => 'Catatan',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Pengguna::className(), ['iduser' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItemCustomers()
    {
        return $this->hasMany(OrderItemCustomer::className(), ['ordercustomer_id' => 'idordercustomer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusOrders()
    {
        return $this->hasMany(StatusOrder::className(), ['ordercustomer_id' => 'idordercustomer']);
    }
}
