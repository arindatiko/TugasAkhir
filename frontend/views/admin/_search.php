<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdminCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_admin') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'uname') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'desa') ?>

    <?php // echo $form->field($model, 'kecamatan') ?>

    <?php // echo $form->field($model, 'jk') ?>

    <?php // echo $form->field($model, 'kriteria') ?>

    <?php // echo $form->field($model, 'no_telp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
