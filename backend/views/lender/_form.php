<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Combox;

/* @var $this yii\web\View */
/* @var $model app\models\Lender */
$this->title = '创建用户'.$model->lenderID;
$this->params['breadcrumbs'][] = ['label' => 'Lenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
    .col-sm-4{
        height:80px;
    }
</style>
<section class="wrapper site-min-height">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <?=$this->title?>
                </header>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class='col-sm-4'>
                        <?= $form->field($model, 'userName')->textInput() ?>
                    </div>
                    <div class='col-sm-4'>
                        <?= $form->field($model, 'englishName')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                    </div>
                    <div class='col-sm-4'>
                        <?= $form->field($model, 'IDType',['labelOptions'=>['label'=>'证件类型']])->dropDownList(Combox::comboxNameBack('证件类型')) ?>
                    </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'lenderFrom')->dropDownList(Combox::comboxNameBack('客户类型')) ?>
                     </div>
                     <div class='col-sm-4'>
                     <?= $form->field($model, 'email')->textInput(['maxlength' => true,'class' => 'form-control']) ?>   
                     </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'class' => 'form-control']) ?> 
                     </div>
                     <div class='col-sm-4'>
                   <?= $form->field($model, 'birthday')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                    <div class='col-sm-4'>
                    <?= $form->field($model, 'tel')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'province')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                         <div class='col-sm-4'>
                    <?= $form->field($model, 'city')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'county')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                         <div class='col-sm-4'>
                    <?= $form->field($model, 'billAddress')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'identityNo')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'gender')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'duty')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                     <div class='col-sm-4'>
                    <?= $form->field($model, 'companyName')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                     </div>
                    <div class="col-sm-4">
                    <?= $form->field($model, 'customerManagerName')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                    </div>
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
