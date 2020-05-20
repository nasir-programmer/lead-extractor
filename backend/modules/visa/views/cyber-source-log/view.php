<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\CyberSourceLog */

$this->title = $model->CyberSourceLogId;
$this->params['breadcrumbs'][] = ['label' => 'Cyber Source Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cyber-source-log-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CyberSourceLogId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CyberSourceLogId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CyberSourceLogId',
            'BookingId',
            'UserId',
            'LogData:ntext',
            'IsActive',
            'CreatedOn',
            'LastUpdated',
        ],
    ]) ?>

</div>
