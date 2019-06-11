<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "menu_warung".
 *
 * @property int $idmenu
 * @property int $warung_id
 * @property string $nama_item
 * @property int $harga
 * @property string $foto
 *
 * @property Keranjang[] $keranjangs
 * @property Warung $warung
 * @property OrderItemCustomer[] $orderItemCustomers
 */
class MenuWarung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_warung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warung_id', 'nama_item', 'harga', 'foto'], 'required'],
            [['warung_id', 'harga'], 'integer'],
            [['nama_item', 'foto'], 'string', 'max' => 255],
            [['warung_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warung::className(), 'targetAttribute' => ['warung_id' => 'idwarung']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmenu' => 'Idmenu',
            'warung_id' => 'Warung ID',
            'nama_item' => 'Nama Item',
            'harga' => 'Harga',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeranjangs()
    {
        return $this->hasMany(Keranjang::className(), ['menuwarung_id' => 'idmenu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarung()
    {
        return $this->hasOne(Warung::className(), ['idwarung' => 'warung_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItemCustomers()
    {
        return $this->hasMany(OrderItemCustomer::className(), ['menuwarung_id' => 'idmenu']);
    }
}
