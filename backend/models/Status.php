<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $idstatus
 * @property string $nama
 *
 * @property OrderCustomer[] $orderCustomers
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idstatus' => 'Idstatus',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderCustomers()
    {
        return $this->hasMany(OrderCustomer::className(), ['status_id' => 'idstatus']);
    }
}
