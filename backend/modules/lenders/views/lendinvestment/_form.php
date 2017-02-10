<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\lenders\models\Lendinvestment */
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

    <div class='col-sm-4'>
        <?= $form->field($model, 'lenderID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'lendInvestNo')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'lendType')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'applyInvestDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'expireDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'investAmt')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'surplusAmt')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'toinvestDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'investRate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'recycleType')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'investStatus')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'paymentType')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'submitDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'toWithholdDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'isDeleted')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'createTime')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'createUser')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'updateTime')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'updateUser')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'RepaymentDay')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'curIncomes')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'curIncomesRate')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'discountRate')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'payBankID')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'receiveBankID')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'contractNo')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'lenderNo')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'seqNo')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'transferBankName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'transferedUser')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'transferedDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'generatedRightSeqNo')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'generatedRightDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'isRightConfirmed')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'isRedeemed')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'redeemDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'billDate')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'redeemType')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'querenshuTime')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'fangkuanBankName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'fangkuanTime')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'fangkuanAmt')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'firstDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'billcount')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'jieqingTime')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'redeemAmt')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'redeemOverDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'investMonth')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'customerManagerName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'customerManagerID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'teamManagerName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'teamManagerID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'operateManagerName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'operateManagerID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'yunYingManagerName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'yunYingManagerID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'yunYingManagerTeamBuildName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'yunYingManagerTeamBuildNameID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'subCompanyManagerName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'subCompanyManagerID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'VPName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'VPID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'subCompanyTeamBuildName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'subCompanyTeamBuildID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'qixiDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'nextfanxiDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'innerComments')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'companyID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'deptID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'companyName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'deptName')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'renewContractComment')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'oralContractNo')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'renewContractNo')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'addressID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'phoneID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'renewDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'jixiaoDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'postType')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'sourceSuperMarketID')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'arrangeWork')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'payBankAmtDtl')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'workflowSeqNo')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'investDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'lateReturn')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'paymentAmount')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'changeRightDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'shijiDaoZhangDate')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'fenhongTimes')->textInput() ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'investType')->textInput(['maxlength' => true]) ?>
    </div>

    <div class='col-sm-4'>
        <?= $form->field($model, 'recycleDesc')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
