<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $iduser
 * @property int $nrp
 * @property string $nama
 * @property string $jurusan
 * @property int $angkatan
 * @property string $foto
 * @property double $rating
 * @property string $password
 *
 * @property Keranjang[] $keranjangs
 * @property OrderCustomer[] $orderCustomers
 * @property OrderTipers[] $orderTipers
 */
class Pengguna extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */

     public $foto;
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nrp', 'nama', 'password'], 'required'],
            [['nrp', 'angkatan'], 'integer'],
            [['rating'], 'number'],
            [['nama'], 'string', 'max' => 255],
            [['foto'], 'file'],
            [['jurusan', 'password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iduser' => 'Iduser',
            'nrp' => 'Nrp',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
            'angkatan' => 'Angkatan',
            'foto' => 'Foto',
            'rating' => 'Rating',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeranjangs()
    {
        return $this->hasMany(Keranjang::className(), ['user_id' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderCustomers()
    {
        return $this->hasMany(OrderCustomer::className(), ['user_id' => 'iduser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderTipers()
    {
        return $this->hasMany(OrderTipers::className(), ['user_id' => 'iduser']);
    }
    public static function findIdentity($id){
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
	     throw new NotSupportedException();
    }

    public function getId(){
        return $this->iduser;
    }

    public function getAuthKey(){
	//return $this->authKey;//Here I return a value of my authKey column
    }

    public function validateAuthKey($authKey){
	//return $this->authKey === $authKey;
    }

    public static function findByUsername($nrp){
    	return self::findOne(['nrp'=>$nrp]);
    }

    public function validatePassword($password){
	     return $this->password === sha1($password);
    }
    public function setPassword($password)
    {
        $this->password = sha1($password);
    }
}
