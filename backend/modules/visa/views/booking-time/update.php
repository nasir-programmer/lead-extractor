<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\BookingTime */

$this->title = 'Update Booking Time: ' . $model->BookingTimeId;
$this->params['breadcrumbs'][] = ['label' => 'Booking Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BookingTimeId, 'url' => ['view', 'id' => $model->BookingTimeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-time-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
