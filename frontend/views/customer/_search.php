<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CustomerCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_customer') ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'uname') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'desa') ?>

    <?php // echo $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'posisi_lat') ?>

    <?php // echo $form->field($model, 'posisi_lng') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
