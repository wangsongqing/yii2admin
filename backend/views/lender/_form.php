<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lender */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lender-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'englishName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IDType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'custSeqNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'webSite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billPostCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customerStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intention')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accountStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accountDate')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?>

    <?= $form->field($model, 'identityNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'companyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customerMantainUser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customerAuth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'signContractDate')->textInput() ?>

    <?= $form->field($model, 'contractNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createTime')->textInput() ?>

    <?= $form->field($model, 'createUser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updateTime')->textInput() ?>

    <?= $form->field($model, 'updateUser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lenderFrom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paymentType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transferedUser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transferedDate')->textInput() ?>

    <?= $form->field($model, 'team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Grade')->textInput() ?>

    <?= $form->field($model, 'signContractAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customerManagerID')->textInput() ?>

    <?= $form->field($model, 'customerManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teamManagerID')->textInput() ?>

    <?= $form->field($model, 'teamManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operateManagerID')->textInput() ?>

    <?= $form->field($model, 'operateManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yunYingManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yunYingManagerID')->textInput() ?>

    <?= $form->field($model, 'subCompanyManagerID')->textInput() ?>

    <?= $form->field($model, 'subCompanyManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subCompanyTeamBuildID')->textInput() ?>

    <?= $form->field($model, 'subCompanyTeamBuildName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VPID')->textInput() ?>

    <?= $form->field($model, 'VPName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yunYingManagerTeamBuildName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yunYingManagerTeamBuildID')->textInput() ?>

    <?= $form->field($model, 'nickName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sourceSuperMarketID')->textInput() ?>

    <?= $form->field($model, 'arrangeWork')->textInput() ?>

    <?= $form->field($model, 'SignDate')->textInput() ?>

    <?= $form->field($model, 'ClaimAddress')->textInput() ?>

    <?= $form->field($model, 'PayDate')->textInput() ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
