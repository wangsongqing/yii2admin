<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\lenders\models\Lendinvestment */

$this->title = 'Create Lendinvestment';
$this->params['breadcrumbs'][] = ['label' => 'Lendinvestments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lendinvestment-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
