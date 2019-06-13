<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Warung;
use frontend\models\WarungSearch;
use frontend\models\Keranjang;
use frontend\models\Pengguna;
use frontend\models\MenuWarung;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use frontend\models\OrderTipers;


/**
 * WarungController implements the CRUD actions for Warung model.
 */
class WarungController extends Controller
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
     * Lists all Warung models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $_SESSION['idordertipers'] = OrderTipers::findOne($id);
        $searchModel = new WarungSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Warung model.
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
     * Creates a new Warung model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Warung();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idwarung]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreateKeranjang()
    {
        $model = new Keranjang();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['order', 'id' => $model->idkeranjang]);
        }

        return $this->render('CreateKeranjang', [
            'model' => $model,
        ]);
    }
    /**
     * Updates an existing Warung model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idwarung]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Warung model.
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
     * Finds the Warung model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Warung the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Warung::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionMenu($id)
    {
      $warung = Warung::find()->all();
      $menuWarung = MenuWarung::find()->where(['warung_id' => $id]);
      $provider = new ActiveDataProvider([
    			'query' => $menuWarung,
    			'pagination' => [
    			'pageSize' => 10,
    			],
    		]);
        return $this->render('menuwarung', [
  			'dataProvider' => $provider,
        'idwarung' => $id,
  			'models' => $warung]);
    }

    public function actionKeranjang($id, $idwarung)
    {
      $keranjang = new Keranjang();
      $item = new MenuWarung();
      $pengguna = new Pengguna();
      $keranjang->menuwarung_id = $id;
      $item->idmenu = Yii::$app->request->get('idmenu');
      $keranjang->user_id = Yii::$app->user->getId();
      $cek=0;
      $cekKeranjang = Keranjang::find()->all();
      foreach ($cekKeranjang as $key) {
        if ($key->menuwarung_id == $id && $key->user_id ==Yii::$app->user->getId()) {
          $cek=1;
          $idkeranjang = $key->idkeranjang;
        }
      }

      if($cek==1){
        $cekKeranjang = Keranjang::findOne($idkeranjang);
        $cekKeranjang->jml_beli = $cekKeranjang->jml_beli+1;
        $cekKeranjang->save();
      }
      else{
        $keranjang->jml_beli = 1;
        $keranjang->save(false);
      }
      return $this->redirect(['menu', 'id' => $idwarung]);
    }

    public function actionList() {
        $itemId = array();
        $keranjang = Keranjang::find()->select(['menuwarung_id'])->where(['user_id'=>Yii::$app->user->getId()])->all();
        for($i = 0; $i < count($keranjang); $i++) {
            $itemId[] = $keranjang[$i]->menuwarung_id;
        }
        $item = MenuWarung::find()->where(['idmenu'=>$itemId])->all();

        return $this->render('keranjang', [
          'item' => $item,
        ]);
    }
}
