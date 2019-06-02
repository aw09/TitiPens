<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "keranjang".
 *
 * @property int $idkeranjang
 * @property int $menuwarung_id
 * @property int $user_id
 *
 * @property MenuWarung $menuwarung
 * @property Pengguna $user
 */
class Keranjang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keranjang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menuwarung_id', 'user_id'], 'required'],
            [['menuwarung_id', 'user_id'], 'integer'],
            [['menuwarung_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuWarung::className(), 'targetAttribute' => ['menuwarung_id' => 'idmenu']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['user_id' => 'iduser']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idkeranjang' => 'Idkeranjang',
            'menuwarung_id' => 'Menuwarung ID',
            'user_id' => 'User ID',
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
    public function getUser()
    {
        return $this->hasOne(Pengguna::className(), ['iduser' => 'user_id']);
    }
}
