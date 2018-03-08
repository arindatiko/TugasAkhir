<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="box box-primary">
    <?php $form = ActiveForm::begin(); ?>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
            <?= $form->field($model, 'id_customer')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'uname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'desa')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
         <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" id="exampleInputFile">

          <p class="help-block">Example block-level help text here.</p>
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
      </div>
    </form>
    
    <?php ActiveForm::end(); ?>

</div>
