<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\Day */

$this->title = 'Update Day: ' . $model->DayId;
$this->params['breadcrumbs'][] = ['label' => 'Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->DayId, 'url' => ['view', 'id' => $model->DayId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="day-update">
<?= Yii::$app->CommonHtml->goBackWithConfirm(); ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
