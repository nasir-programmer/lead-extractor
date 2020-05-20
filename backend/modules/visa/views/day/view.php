<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\Day */

$this->title = $model->DayId;
$this->params['breadcrumbs'][] = ['label' => 'Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="day-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?= Yii::$app->CommonHtml->goBackWithConfirm(); ?>
        <?= Html::a('Update', ['update', 'id' => $model->DayId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->DayId], [
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
            'DayId',
            'DayName',
            'IsActive',
            'CreatedOn',
            'LastUpdated',
        ],
    ]) ?>

</div>
