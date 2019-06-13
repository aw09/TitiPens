<?php

namespace frontend\models;

use Yii;
use frontend\models\Status;

/**
 * This is the model class for table "order_customer".
 *
 * @property int $idordercustomer
 * @property int $ordertipers_id
 * @property string $tanggal
 * @property int $user_id
 * @property string $lokasi
 * @property string $catatan
 * @property int $total
 * @property int $status_id
 *
 * @property Pengguna $user
 * @property OrderTipers $ordertipers
 * @property Status $status
 * @property OrderItemCustomer[] $orderItemCustomers
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
            [['ordertipers_id', 'user_id', 'lokasi', 'catatan', 'total', 'status_id'], 'required'],
            [['ordertipers_id', 'user_id', 'total', 'status_id'], 'integer'],
            [['tanggal'], 'safe'],
            [['catatan'], 'string'],
            [['lokasi'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['user_id' => 'iduser']],
            [['ordertipers_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderTipers::className(), 'targetAttribute' => ['ordertipers_id' => 'idordertipers']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'idstatus']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idordercustomer' => 'Idordercustomer',
            'ordertipers_id' => 'Ordertipers ID',
            'tanggal' => 'Tanggal',
            'user_id' => 'User ID',
            'lokasi' => 'Lokasi',
            'catatan' => 'Catatan',
            'total' => 'Total',
            'status_id' => 'Status ID',
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
    public function getOrdertipers()
    {
        return $this->hasOne(OrderTipers::className(), ['idordertipers' => 'ordertipers_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['idstatus' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItemCustomers()
    {
        return $this->hasMany(OrderItemCustomer::className(), ['ordercustomer_id' => 'idordercustomer']);
    }
}
