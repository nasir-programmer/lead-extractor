<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\visa\models\BookingType */

$this->title = 'Create Booking Type';
$this->params['breadcrumbs'][] = ['label' => 'Booking Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
