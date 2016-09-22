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

    <?= $form->field($model, 'lendInvestNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lendType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'applyInvestDate')->textInput() ?>

    <?= $form->field($model, 'expireDate')->textInput() ?>

    <?= $form->field($model, 'investAmt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surplusAmt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toinvestDate')->textInput() ?>

    <?= $form->field($model, 'investRate')->textInput() ?>

    <?= $form->field($model, 'recycleType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'investStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paymentType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'submitDate')->textInput() ?>

    <?= $form->field($model, 'toWithholdDate')->textInput() ?>

    <?= $form->field($model, 'isDeleted')->textInput() ?>

    <?= $form->field($model, 'RepaymentDay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curIncomes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curIncomesRate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discountRate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payBankID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receiveBankID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contractNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lenderNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seqNo')->textInput() ?>

    <?= $form->field($model, 'transferBankName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transferedUser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transferedDate')->textInput() ?>

    <?= $form->field($model, 'generatedRightSeqNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'generatedRightDate')->textInput() ?>

    <?= $form->field($model, 'isRightConfirmed')->textInput() ?>

    <?= $form->field($model, 'isRedeemed')->textInput() ?>

    <?= $form->field($model, 'redeemDate')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'redeemType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'querenshuTime')->textInput() ?>

    <?= $form->field($model, 'fangkuanBankName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fangkuanTime')->textInput() ?>

    <?= $form->field($model, 'fangkuanAmt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstDate')->textInput() ?>

    <?= $form->field($model, 'billcount')->textInput() ?>

    <?= $form->field($model, 'jieqingTime')->textInput() ?>

    <?= $form->field($model, 'redeemAmt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'redeemOverDate')->textInput() ?>

    <?= $form->field($model, 'investMonth')->textInput() ?>

    <?= $form->field($model, 'customerManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customerManagerID')->textInput() ?>

    <?= $form->field($model, 'teamManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teamManagerID')->textInput() ?>

    <?= $form->field($model, 'operateManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operateManagerID')->textInput() ?>

    <?= $form->field($model, 'yunYingManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yunYingManagerID')->textInput() ?>

    <?= $form->field($model, 'yunYingManagerTeamBuildName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yunYingManagerTeamBuildNameID')->textInput() ?>

    <?= $form->field($model, 'subCompanyManagerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subCompanyManagerID')->textInput() ?>

    <?= $form->field($model, 'VPName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VPID')->textInput() ?>

    <?= $form->field($model, 'subCompanyTeamBuildName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subCompanyTeamBuildID')->textInput() ?>

    <?= $form->field($model, 'qixiDate')->textInput() ?>

    <?= $form->field($model, 'nextfanxiDate')->textInput() ?>

    <?= $form->field($model, 'innerComments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'companyID')->textInput() ?>

    <?= $form->field($model, 'deptID')->textInput() ?>

    <?= $form->field($model, 'companyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deptName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'renewContractComment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oralContractNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'renewContractNo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addressID')->textInput() ?>

    <?= $form->field($model, 'phoneID')->textInput() ?>

    <?= $form->field($model, 'renewDate')->textInput() ?>

    <?= $form->field($model, 'jixiaoDate')->textInput() ?>

    <?= $form->field($model, 'postType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sourceSuperMarketID')->textInput() ?>

    <?= $form->field($model, 'arrangeWork')->textInput() ?>

    <?= $form->field($model, 'payBankAmtDtl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workflowSeqNo')->textInput() ?>

    <?= $form->field($model, 'investDate')->textInput() ?>

    <?= $form->field($model, 'lateReturn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paymentAmount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'changeRightDate')->textInput() ?>

    <?= $form->field($model, 'shijiDaoZhangDate')->textInput() ?>

    <?= $form->field($model, 'fenhongTimes')->textInput() ?>

    <?= $form->field($model, 'investType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recycleDesc')->textInput(['maxlength' => true]) ?>

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