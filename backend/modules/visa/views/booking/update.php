<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\Booking */

$this->title = 'Update Booking: ' . $model->BookingId;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->BookingId, 'url' => ['view', 'id' => $model->BookingId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking-update">
<?= Yii::$app->CommonHtml->goBackWithConfirm(); ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
