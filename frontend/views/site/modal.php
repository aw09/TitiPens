<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header  bg-colour">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <?php
        use yii\helpers\Html;
        use yii\helpers\Url;
        use yii\widgets\ActiveForm;
        use yii\App;

        /* @var $this yii\web\View */
        /* @var $model app\models\Order_Tipers */
        /* @var $form yii\widgets\ActiveForm */
        ?>
        <div class="order--tipers-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($modelOrder, 'fee')->textInput() ?>

            <?= $form->field($modelOrder, 'lokasi_id')->dropDownList($namalokasi,['prompt'=>'Pilih Lokasi'])->label('Lokasi') ?>

            <?= $form->field($modelOrder, 'catatan')->textarea(['rows' => 6]) ?>

            <div class="form-group">
              <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
                  <?= Html::submitButton('Save', ['class' => 'button']) ?>
                    <button type="button" class="button" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
            <?php ActiveForm::end(); ?>
        </div>

      </div>
    </div>

  </div>
</div>
