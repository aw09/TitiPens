<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\helpers\ArrayHelper;
use frontend\models\OrderTipers;
use frontend\models\Lokasi;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use aryelds\sweetalert\SweetAlert;


/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */

    public function actionLogin($role)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if($role == 1){
              return $this->redirect(['tipers']);
            }
            if($role == 2){
              return $this->redirect(['customer']);
            }
        } else {
            $model->password = '';

            return $this->renderPartial('login', [
                'model' => $model,
                'role' => $role,
            ]);
        }

    }
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => OrderTipers::findOne($id),
        ]);
    }
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionTipers(){
          $_SESSION['role'] = 1;
          $modelTitipan = OrderTipers::find()->all();
          $modelOrder = new OrderTipers();
          $namalokasi = Lokasi::find()->all();
          $namalokasi = ArrayHelper::map($namalokasi, 'idlokasi','name');
          if ($modelOrder->load(Yii::$app->request->post()) ) {
              $modelOrder->user_id=1;
              $modelOrder->save();
              $url = $modelOrder->idordertipers;
              echo SweetAlert::widget([
                  'options' => [
                      'title' => "Order berhasil dibuat",
                      'type' => SweetAlert::TYPE_SUCCESS,
                      'showCancelButton' => true,
                      'confirmButtonColor' => "#DD6B55",
                      'confirmButtonText' => "Detail",
                      'cancelButtonText' => "Close",
                      'closeOnConfirm' => false,
                      'closeOnCancel' => true
                  ],
                  'callbackJs' => new \yii\web\JsExpression('function(isConfirm) {
                      if (isConfirm) {
                          window.location.href = "'.$url.'";
                      } else {
                          swal("Cancelled", "Your imaginary file is safe :)", "error");
                      }
                  }')
              ]);

            //return $this->redirect(['view', 'id' => $modelOrder->idordertipers]);
          }
          return $this->render('createTipers', [
              'model' => $modelTitipan,
              'modelOrder' => $modelOrder,
              'namalokasi' => $namalokasi,
          ]);
    }

    public function actionCustomer(){
          $_SESSION['role'] = 2;
          $modelOrder = new Order_Tipers();
          $namalokasi = Lokasi::find()->all();
          $namalokasi = ArrayHelper::map($namalokasi, 'idlokasi','name');
          if ($modelOrder->load(Yii::$app->request->post()) ) {
              $modelOrder->user_id=1;
              $modelOrder->save();
              $url = "index.php?r=site%2Fview&id=".$modelOrder->idordertipers;
              echo SweetAlert::widget([
                  'options' => [
                      'title' => "Order berhasil dibuat",
                      'type' => SweetAlert::TYPE_SUCCESS,
                      'showCancelButton' => true,
                      'confirmButtonColor' => "#DD6B55",
                      'confirmButtonText' => "Detail",
                      'cancelButtonText' => "Close",
                      'closeOnConfirm' => false,
                      'closeOnCancel' => false,
                  ],
                  'callbackJs' => new \yii\web\JsExpression('function(isConfirm) {
                      if (isConfirm) {
                          window.location.href = "'.$url.'";
                      } else {
                          swal("Cancelled", "Your imaginary file is safe :)", "error");
                      }
                  }')
              ]);

            //return $this->redirect(['view', 'id' => $modelOrder->idordertipers]);
          }
          return $this->render('createCustomer', [
              'modelOrder' => $modelOrder,
              'namalokasi' => $namalokasi,
          ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }
    public function actionDelete($id)
    {
        $delete = OrderTipers::findOne($id);
        $delete->delete();
        return $this->redirect(['tipers']);
    }
    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
