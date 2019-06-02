<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "warung".
 *
 * @property int $idwarung
 * @property string $nama
 * @property string $foto
 *
 * @property MenuWarung[] $menuWarungs
 */
class Warung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'foto'], 'required'],
            [['nama', 'foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idwarung' => 'Idwarung',
            'nama' => 'Nama',
            'foto' => 'Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuWarungs()
    {
        return $this->hasMany(MenuWarung::className(), ['warung_id' => 'idwarung']);
    }
}
