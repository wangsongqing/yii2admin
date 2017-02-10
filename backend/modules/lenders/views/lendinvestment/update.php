<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\lenders\models\Lendinvestment */

$this->title = 'Update Lendinvestment: ' . $model->lendInvestID;
$this->params['breadcrumbs'][] = ['label' => 'Lendinvestments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lendInvestID, 'url' => ['view', 'id' => $model->lendInvestID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lendinvestment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
