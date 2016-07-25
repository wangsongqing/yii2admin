<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lender */
$this->title = '修改密码';
//$this->params['breadcrumbs'][] = ['label' => 'Lenders', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<section class="wrapper site-min-height">
    <div class="row" style="margin-left: 10px;">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <?=$this->title?>
                </header>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(); ?>

                                    <?= $form->field($model, 'oldPasswd', [
                    'labelOptions' => ['class'=>'col-lg-2 control-label'],
                    'template' => '
                            {label}
                            <div class="col-lg-10">
                            {input}
                            {error}
                            </div>
                            ',
                ])->passwordInput([
                    'maxlength' => 64,
                    'class' => 'form-control',
                ]) ?>

                <?= $form->field($model, 'newPasswdOne', [
                    'labelOptions' => ['class'=>'col-lg-2 control-label'],
                    'template' => '
                            {label}
                            <div class="col-lg-10">
                            {input}
                            {error}
                            </div>
                            ',
                ])->passwordInput([
                    'class' => 'form-control',
                ]) ?>

                <?= $form->field($model, 'newPasswdTwo', [
                    'labelOptions' => ['class'=>'col-lg-2 control-label'],
                    'template' => '
                            {label}
                            <div class="col-lg-10">
                            {input}
                            {error}
                            </div>
                            ',
                ])->passwordInput([
                    'class' => 'form-control',
                ]) ?>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10" style="margin-left:430px;">
        <?= Html::submitButton('修改', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
        
    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
