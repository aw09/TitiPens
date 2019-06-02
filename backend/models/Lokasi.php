<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lokasi".
 *
 * @property int $idlokasi
 * @property string $name
 *
 * @property OrderTipers[] $orderTipers
 */
class Lokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idlokasi' => 'Idlokasi',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderTipers()
    {
        return $this->hasMany(OrderTipers::className(), ['lokasi_id' => 'idlokasi']);
    }
}
