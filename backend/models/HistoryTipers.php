<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "history_tipers".
 *
 * @property int $idhistory
 * @property int $ordertipers_id
 * @property int $fee
 * @property int $lokasi_id
 * @property int $user_id
 * @property string $catatan
 * @property string $tanggal
 *
 * @property Pengguna $user
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
            [['ordertipers_id', 'fee', 'lokasi_id', 'user_id', 'catatan', 'tanggal'], 'required'],
            [['ordertipers_id', 'fee', 'lokasi_id', 'user_id'], 'integer'],
            [['catatan'], 'string'],
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
            'ordertipers_id' => 'Ordertipers ID',
            'fee' => 'Fee',
            'lokasi_id' => 'Lokasi ID',
            'user_id' => 'User ID',
            'catatan' => 'Catatan',
            'tanggal' => 'Tanggal',
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
