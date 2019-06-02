<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "history_tipers".
 *
 * @property int $idhistori
 * @property int $ordertipers_id
 *
 * @property OrderTipers $ordertipers
 */
class HistoryTipers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history_tipers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordertipers_id'], 'required'],
            [['ordertipers_id'], 'integer'],
            [['ordertipers_id'], 'exist', 'skipOnError' => true, 'targetClass' => OrderTipers::className(), 'targetAttribute' => ['ordertipers_id' => 'idordertipers']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idhistori' => 'Idhistori',
            'ordertipers_id' => 'Ordertipers ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdertipers()
    {
        return $this->hasOne(OrderTipers::className(), ['idordertipers' => 'ordertipers_id']);
    }
}
