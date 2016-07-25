<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lender */

$this->title = 'Update Lender: ' . $model->lenderID;
$this->params['breadcrumbs'][] = ['label' => 'Lenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lenderID, 'url' => ['view', 'id' => $model->lenderID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lender-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
