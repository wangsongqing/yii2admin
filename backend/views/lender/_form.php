<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lender */
$this->title = '更新用户'.$model->lenderID;
$this->params['breadcrumbs'][] = ['label' => 'Lenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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

                    <?= $form->field($model, 'userName',[
                          'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight" style="height:68px;">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'englishName',[
                         'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'IDType',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label','label'=>'身份类型'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->dropDownList(['身份证' => '身份证','军官证'=>'军官证']) ?>

                    <?= $form->field($model, 'custSeqNo',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label','label'=>'投资类型'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                     <?= $form->field($model, 'email',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>   

                    <?= $form->field($model, 'phone',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?> 

                   <?= $form->field($model, 'birthday',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'tel',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'province',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'city',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'county',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'billAddress',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label','label'=>'联系地址'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'identityNo',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label','label'=>'身份证号码'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'gender',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>


                    <?= $form->field($model, 'duty',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

                    <?= $form->field($model, 'companyName',[
                        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                                        'template' => '
                                            {label}
                                            <div class="col-lg-3 cloheight">
                                            {input}
                                            {error}
                                            </div>',
                    ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

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
