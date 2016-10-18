<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lendinvestment */
/* @var $form yii\widgets\ActiveForm */
?>
<section class="wrapper site-min-height">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <?=$this->title?>
                </header>
                <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    

    

<div class="form-group">
        <div class="col-lg-offset-2 col-lg-10" style="margin-left:430px;">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
        
    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>