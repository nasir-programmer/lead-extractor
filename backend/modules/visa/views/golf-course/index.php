<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\visa\models\GolfCourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Golf Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golf-course-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Golf Course', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'GCBucketId',
            // 'GolfCourseId',
            'golfType.Name',
            // 'GolfTypeId', 
           
            'Name',
            'City',
            'IsActive',
            //'CreatedOn',
            //'LastUpdated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
