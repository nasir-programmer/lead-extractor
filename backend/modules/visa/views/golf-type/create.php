<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\GolfType */

$this->title = 'Create Golf Type';
$this->params['breadcrumbs'][] = ['label' => 'Golf Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golf-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
