<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UserId')->textInput() ?>

    <?= $form->field($model, 'BookingTypeId')->textInput() ?>

    <?= $form->field($model, 'GolfTypeId')->textInput() ?>

    <?= $form->field($model, 'GolfCourseId')->textInput() ?>

    <?= $form->field($model, 'BookingDate')->textInput() ?>

    <?= $form->field($model, 'BookingTime')->textInput() ?>

    <?= $form->field($model, 'BookingTimeConfirmed')->textInput() ?>

    <?= $form->field($model, 'Amount')->textInput() ?>

    <?= $form->field($model, 'Discount')->textInput() ?>

    <?= $form->field($model, 'PayableAmount')->textInput() ?>

    <?= $form->field($model, 'BookingStatusId')->textInput() ?>

    <?= $form->field($model, 'PaymentStatusId')->textInput() ?>

    <?= $form->field($model, 'IsPreAuthVerified')->textInput() ?>

    <?= $form->field($model, 'Remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CancelReason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <?= $form->field($model, 'CancellationDateTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
