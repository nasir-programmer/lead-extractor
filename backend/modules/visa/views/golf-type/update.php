<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\GolfType */

$this->title = 'Update Golf Type: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Golf Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->GolfTypeId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golf-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
