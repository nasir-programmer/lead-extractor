<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\Day */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="day-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DayName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IsActive')->textInput() ?>

    <?= $form->field($model, 'CreatedOn')->textInput() ?>

    <?= $form->field($model, 'LastUpdated')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
