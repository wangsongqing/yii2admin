<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lendinvestment */
$this->title = '创建投资申请';
$this->params['breadcrumbs'][] = ['label' => 'Lendinvestments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lendinvestment-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
