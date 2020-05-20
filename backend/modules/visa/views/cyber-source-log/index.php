<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\visa\models\CyberSourceLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cyber Source Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cyber-source-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* Html::a('Create Cyber Source Log', ['create'], ['class' => 'btn btn-success']) */?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            'CyberSourceLogId',
            'BookingId',
            'user.UserName',
            
            'LogData:ntext',
            
            // 'IsActive',
            //'CreatedOn',
            //'LastUpdated',

            
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
