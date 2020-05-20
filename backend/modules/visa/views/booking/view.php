<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\Booking */

$this->title = $model->BookingId;
$this->params['breadcrumbs'][] = ['label' => 'Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="booking-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?= Yii::$app->CommonHtml->goBackWithConfirm(); ?>
        <?= Html::a('Update', ['update', 'id' => $model->BookingId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->BookingId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'BookingId',
            'UserId',
            'BookingTypeId',
            'GolfTypeId',
            'GolfCourseId',
            'BookingDate',
            'BookingTime',
            'BookingTimeConfirmed',
            'Amount',
            'Discount',
            'PayableAmount',
            'BookingStatusId',
            'PaymentStatusId',
            'IsPreAuthVerified',
            'Remarks',
            'CancelReason:ntext',
            'IsActive',
            'CreatedOn',
            'LastUpdated',
            'CancellationDateTime',
        ],
    ]) ?>

</div>
