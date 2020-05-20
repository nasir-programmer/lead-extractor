<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\visa\models\BookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bookings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Booking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'BookingId',
            // 'UserId',
            'user.UserName',
            // 'BookingTypeId',
            'bookingType.Name',
            // 'GolfTypeId',
            'golfType.Name',
            // 'GolfCourseId',
           'golfCourse.Name',
            'BookingDate',
            'BookingTime',
            'bookingStatus.Name',
            //'BookingTimeConfirmed',
            //'Amount',
            //'Discount',
            //'PayableAmount',
            //'BookingStatusId',
            //'PaymentStatusId',
            //'IsPreAuthVerified',
            //'Remarks',
            //'CancelReason:ntext',
            //'IsActive',
            //'CreatedOn',
            //'LastUpdated',
            //'CancellationDateTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
