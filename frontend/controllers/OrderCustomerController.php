<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Pengguna;
use frontend\models\OrderCustomer;
use frontend\models\OrderTipers;
use frontend\models\Keranjang;
use frontend\models\OrderCustomerSearch;
use frontend\models\OrderItemCustomer;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderCustomerController implements the CRUD actions for OrderCustomer model.
 */
class OrderCustomerController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all OrderCustomer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderCustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderCustomer model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OrderCustomer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
     public function actionCreate()
     {
         $model = new OrderCustomer();

         if ($model->load(Yii::$app->request->post()) && $model->save()) {
             return $this->redirect(['view', 'id' => $model->idordercustomer]);
         }

         return $this->render('create', [
             'model' => $model,
         ]);
     }
    public function actionBuat()
    {
        $model = new OrderCustomer();
        $cekOrderTipers = OrderCustomer::find()->select(['ordertipers_id'])->where(['ordertipers_id'=>$_SESSION['idordertipers']->idordertipers])->count();
        if ($cekOrderTipers==0) {
            $model->idordercustomer = OrderCustomer::find()->max('idordercustomer')+1;
            $model->ordertipers_id = $_SESSION['idordertipers']->idordertipers;
            $model->user_id = Yii::$app->user->getId();
            $model->tanggal = date('Y-m-d H:i:s');
            $model->lokasi = Yii::$app->request->post('lokasi');
            $model->catatan = Yii::$app->request->post('catatan');
            $model->total = $_SESSION['total'];
            $model->status_id = 1;
            $model->save(false);
            $itemId = array();
            $keranjang = Keranjang::find()->where(['user_id'=>Yii::$app->user->getId()])->all();
            print("<pre>".print_r($_SESSION['harga'],true)."</pre>");
            die();
            for($i = 0; $i < count($keranjang); $i++) {
                $itemId[] = $keranjang[$i]->menuwarung_id;
                $orderItem = new OrderItemCustomer();
                $orderItem->ordercustomer_id = $model->idordercustomer;
                $orderItem->menuwarung_id = $itemId[$i];
                $orderItem->jumlah = $keranjang[$i]->jml_beli;
                print("<pre>".print_r($orderItem,true)."</pre>");
                $orderItem->save(false);
            }

            $keranjang = Keranjang::deleteAll('user_id = '.Yii::$app->user->getId());

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing OrderCustomer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idordercustomer]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OrderCustomer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OrderCustomer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderCustomer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderCustomer::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
