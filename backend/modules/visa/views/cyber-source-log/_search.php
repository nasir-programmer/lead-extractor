<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\CyberSourceLogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cyber-source-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'CyberSourceLogId') ?>

    <?= $form->field($model, 'BookingId') ?>

    <?= $form->field($model, 'UserId') ?>

    <?= $form->field($model, 'LogData') ?>

    <?= $form->field($model, 'IsActive') ?>

    <?php // echo $form->field($model, 'CreatedOn') ?>

    <?php // echo $form->field($model, 'LastUpdated') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
