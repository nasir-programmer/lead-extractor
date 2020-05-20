<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AuditEntry */

$this->title = 'Update Audit Entry: ' . $model->audit_entry_id;
$this->params['breadcrumbs'][] = ['label' => 'Audit Entries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->audit_entry_id, 'url' => ['view', 'id' => $model->audit_entry_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="audit-entry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
