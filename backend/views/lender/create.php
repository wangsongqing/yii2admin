<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lender */

$this->title = 'Create Lender';
$this->params['breadcrumbs'][] = ['label' => 'Lenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lender-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
