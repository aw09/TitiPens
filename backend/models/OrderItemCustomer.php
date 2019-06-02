<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_item_customer".
 *
 * @property int $idorderitem
 * @property int $ordercustomer_id
 * @property int $menuwarung_id
 * @property int $jumlah
 * @property int $total
 *
 * @property MenuWarung $menuwarung
 * @property OrderCustomer $ordercustomer
 */
class OrderItemCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_item_customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordercustomer_id', 'menuwarung_id', 'jumlah', 'total'], 'required'],
            [['ordercustomer_id', 'menuwarung_id', 'jumlah', 'total'], 'integer'],
            [['menuwarung_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuWarung::className(), 'targetAttribute' => ['menuwarung_id' => 'idmenu']],
            [['ordercustomer_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderCustomer::className(), 'targetAttribute' => ['ordercustomer_id' => 'idordercustomer']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idorderitem' => 'Idorderitem',
            'ordercustomer_id' => 'Ordercustomer ID',
            'menuwarung_id' => 'Menuwarung ID',
            'jumlah' => 'Jumlah',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuwarung()
    {
        return $this->hasOne(MenuWarung::className(), ['idmenu' => 'menuwarung_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdercustomer()
    {
        return $this->hasOne(OrderCustomer::className(), ['idordercustomer' => 'ordercustomer_id']);
    }
}
