<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\BookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'BookingId') ?>

    <?= $form->field($model, 'UserId') ?>

    <?= $form->field($model, 'BookingTypeId') ?>

    <?= $form->field($model, 'GolfTypeId') ?>

    <?= $form->field($model, 'GolfCourseId') ?>

    <?php // echo $form->field($model, 'BookingDate') ?>

    <?php // echo $form->field($model, 'BookingTime') ?>

    <?php // echo $form->field($model, 'BookingTimeConfirmed') ?>

    <?php // echo $form->field($model, 'Amount') ?>

    <?php // echo $form->field($model, 'Discount') ?>

    <?php // echo $form->field($model, 'PayableAmount') ?>

    <?php // echo $form->field($model, 'BookingStatusId') ?>

    <?php // echo $form->field($model, 'PaymentStatusId') ?>

    <?php // echo $form->field($model, 'IsPreAuthVerified') ?>

    <?php // echo $form->field($model, 'Remarks') ?>

    <?php // echo $form->field($model, 'CancelReason') ?>

    <?php // echo $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <?php // echo $form->field($model, 'CancellationDateTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
