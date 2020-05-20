<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\CyberSourceLog */

$this->title = 'Update Cyber Source Log: ' . $model->CyberSourceLogId;
$this->params['breadcrumbs'][] = ['label' => 'Cyber Source Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CyberSourceLogId, 'url' => ['view', 'id' => $model->CyberSourceLogId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cyber-source-log-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
