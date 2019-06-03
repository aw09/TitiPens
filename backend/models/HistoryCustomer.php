<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "history_customer".
 *
 * @property int $idhistory
 * @property int $ordercustomer_id
 * @property int $ordertipers_id
 * @property string $tanggal
 * @property int $user_id
 * @property int $total
 *
 * @property Pengguna $user
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
            [['ordercustomer_id', 'ordertipers_id', 'tanggal', 'user_id', 'total'], 'required'],
            [['ordercustomer_id', 'ordertipers_id', 'user_id', 'total'], 'integer'],
            [['tanggal'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['user_id' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idhistory' => 'Idhistory',
            'ordercustomer_id' => 'Ordercustomer ID',
            'ordertipers_id' => 'Ordertipers ID',
            'tanggal' => 'Tanggal',
            'user_id' => 'User ID',
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
}
