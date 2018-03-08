<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Admin */

$this->title = 'Update Admin: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_admin, 'url' => ['view', 'id' => $model->id_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>