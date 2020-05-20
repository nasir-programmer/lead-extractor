<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\BookingTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'BookingTypeId') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'IsActive') ?>

    <?= $form->field($model, 'CreatedOn') ?>

    <?= $form->field($model, 'LastUpdated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
