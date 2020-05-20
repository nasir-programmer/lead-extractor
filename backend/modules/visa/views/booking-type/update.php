<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\BookingType */

$this->title = 'Update Booking Type: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Booking Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->BookingTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
