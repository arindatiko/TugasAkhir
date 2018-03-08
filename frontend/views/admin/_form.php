<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_admin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'P' => 'P', 'L' => 'L', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kriteria')->dropDownList([ 'K' => 'K', 'H' => 'H', 'W' => 'W', 'S' => 'S', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_telp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
