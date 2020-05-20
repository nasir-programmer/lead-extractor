<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuditEntry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="audit-entry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'audit_entry_timestamp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audit_entry_model_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audit_entry_operation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audit_entry_field_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audit_entry_old_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'audit_entry_new_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'audit_entry_user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'audit_entry_ip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
