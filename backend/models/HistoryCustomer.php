<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "history_customer".
 *
 * @property int $idhistori
 * @property int $ordercustomer_id
 *
 * @property OrderCustomer $ordercustomer
 */
class HistoryCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history_customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordercustomer_id'], 'required'],
            [['ordercustomer_id'], 'integer'],
            [['ordercustomer_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderCustomer::className(), 'targetAttribute' => ['ordercustomer_id' => 'idordercustomer']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idhistori' => 'Idhistori',
            'ordercustomer_id' => 'Ordercustomer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdercustomer()
    {
        return $this->hasOne(OrderCustomer::className(), ['idordercustomer' => 'ordercustomer_id']);
    }
}
