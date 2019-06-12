<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;
use frontend\models\Pengguna;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $nrp;
    public $nama;
    public $password;
    public $password_repeat;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['nrp', 'trim'],
            ['nrp', 'required'],
            ['nrp', 'unique', 'targetClass' => '\frontend\models\Pengguna', 'message' => 'This nrp has already been taken.'],
            ['nrp', 'string', 'min' => 2, 'max' => 255],

            ['nama', 'trim'],
            ['nama', 'required'],
            ['nama', 'string', 'max' => 255],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and nama was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        $user = new Pengguna();
        $user->nrp = $this->nrp;
        $user->nama = $this->nama;
        $user->setPassword($this->password);
        return $user->save(false);

    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
