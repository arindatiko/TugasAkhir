<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Customer */

$this->title = 'Create Customer';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Customer</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    
  </div>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
