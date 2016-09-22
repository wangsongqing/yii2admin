<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lendinvestment */

$this->title = '首页》投资管理》投资ID:'. $model->lendInvestID.'》编辑';
$this->params['breadcrumbs'][] = ['label' => 'Lendinvestments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lendInvestID, 'url' => ['view', 'id' => $model->lendInvestID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lendinvestment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
