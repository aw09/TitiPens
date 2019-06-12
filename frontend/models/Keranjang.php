<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "keranjang".
 *
 * @property int $idkeranjang
 * @property int $menuwarung_id
 * @property int $user_id
 * @property int $jml_beli
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
            [['menuwarung_id', 'user_id', 'jml_beli'], 'required'],
            [['menuwarung_id', 'user_id', 'jml_beli'], 'integer'],
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
            'jml_beli' => 'Jml Beli',
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