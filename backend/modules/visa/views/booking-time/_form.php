<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\BookingTime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-time-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GolfCourseId')->textInput() ?>

    <?= $form->field($model, 'DayId')->textInput() ?>

    <?= $form->field($model, 'OpenTime')->textInput() ?>

    <?= $form->field($model, 'CloseTime')->textInput() ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
