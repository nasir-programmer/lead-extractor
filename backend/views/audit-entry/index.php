<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\export\ExportMenu;
// use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuditEntrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Audit Entries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="audit-entry-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php /* Html::a('Create Audit Entry', ['create'], ['class' => 'btn btn-success']) */ ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php
$gridColumns =[
    ['class' => 'yii\grid\SerialColumn'],

    'audit_entry_id',
    'audit_entry_timestamp:datetime',
    'audit_entry_model_name',
    'audit_entry_operation',
    'audit_entry_field_name',
    'audit_entry_old_value:ntext',
    'audit_entry_new_value:ntext',
    'audit_entry_user_id',
    'audit_entry_ip',

    ['class' => 'yii\grid\ActionColumn'],
];

?>

<?php echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns
]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns
    ]); ?>

    <?php Pjax::end(); ?>

</div>
