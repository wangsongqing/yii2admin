<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\lenders\models\LendinvestmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lendinvestment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    
    <?= $form->field($model, 'lendInvestID',[
        'labelOptions' => ['class'=>'col-lg-1 control-label','label'=>'投资ID'],
                      'template' => '
                          {label}
                          <div class="col-lg-3 cloheight" style="height:68px;">
                          {input}
                          {error}
                          </div>',
  ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

    <?= $form->field($model, 'contractNo',[
        'labelOptions' => ['class'=>'col-lg-1 control-label'],
                      'template' => '
                          {label}
                          <div class="col-lg-3 cloheight" style="height:68px;">
                          {input}
                          {error}
                          </div>',
  ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>
    
    <?= $form->field($model, 'expireDate',[
           'labelOptions' => ['class'=>'col-lg-1 control-label'],
                         'template' => '
                             {label}
                             <div class="col-lg-3 cloheight" style="height:68px;">
                             {input}
                             {error}
                             </div>',
     ])->textInput(['maxlength' => true,'class' => 'form-control']) ?>

    <?php //$form->field($model, 'lendInvestNo') ?>

    <?php //$form->field($model, 'lendType') ?>

    <?php //$form->field($model, 'applyInvestDate') ?>

    <?php // echo $form->field($model, 'expireDate') ?>

    <?php // echo $form->field($model, 'investAmt') ?>

    <?php // echo $form->field($model, 'surplusAmt') ?>

    <?php // echo $form->field($model, 'toinvestDate') ?>

    <?php // echo $form->field($model, 'investRate') ?>

    <?php // echo $form->field($model, 'recycleType') ?>

    <?php // echo $form->field($model, 'investStatus') ?>

    <?php // echo $form->field($model, 'paymentType') ?>

    <?php // echo $form->field($model, 'submitDate') ?>

    <?php // echo $form->field($model, 'toWithholdDate') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

    <?php // echo $form->field($model, 'createTime') ?>

    <?php // echo $form->field($model, 'createUser') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <?php // echo $form->field($model, 'updateUser') ?>

    <?php // echo $form->field($model, 'RepaymentDay') ?>

    <?php // echo $form->field($model, 'curIncomes') ?>

    <?php // echo $form->field($model, 'curIncomesRate') ?>

    <?php // echo $form->field($model, 'discountRate') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'payBankID') ?>

    <?php // echo $form->field($model, 'receiveBankID') ?>

    <?php // echo $form->field($model, 'contractNo') ?>

    <?php // echo $form->field($model, 'lenderNo') ?>

    <?php // echo $form->field($model, 'seqNo') ?>

    <?php // echo $form->field($model, 'transferBankName') ?>

    <?php // echo $form->field($model, 'transferedUser') ?>

    <?php // echo $form->field($model, 'transferedDate') ?>

    <?php // echo $form->field($model, 'generatedRightSeqNo') ?>

    <?php // echo $form->field($model, 'generatedRightDate') ?>

    <?php // echo $form->field($model, 'isRightConfirmed') ?>

    <?php // echo $form->field($model, 'isRedeemed') ?>

    <?php // echo $form->field($model, 'redeemDate') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'billDate') ?>

    <?php // echo $form->field($model, 'redeemType') ?>

    <?php // echo $form->field($model, 'querenshuTime') ?>

    <?php // echo $form->field($model, 'fangkuanBankName') ?>

    <?php // echo $form->field($model, 'fangkuanTime') ?>

    <?php // echo $form->field($model, 'fangkuanAmt') ?>

    <?php // echo $form->field($model, 'firstDate') ?>

    <?php // echo $form->field($model, 'billcount') ?>

    <?php // echo $form->field($model, 'jieqingTime') ?>

    <?php // echo $form->field($model, 'redeemAmt') ?>

    <?php // echo $form->field($model, 'redeemOverDate') ?>

    <?php // echo $form->field($model, 'investMonth') ?>

    <?php // echo $form->field($model, 'customerManagerName') ?>

    <?php // echo $form->field($model, 'customerManagerID') ?>

    <?php // echo $form->field($model, 'teamManagerName') ?>

    <?php // echo $form->field($model, 'teamManagerID') ?>

    <?php // echo $form->field($model, 'operateManagerName') ?>

    <?php // echo $form->field($model, 'operateManagerID') ?>

    <?php // echo $form->field($model, 'yunYingManagerName') ?>

    <?php // echo $form->field($model, 'yunYingManagerID') ?>

    <?php // echo $form->field($model, 'yunYingManagerTeamBuildName') ?>

    <?php // echo $form->field($model, 'yunYingManagerTeamBuildNameID') ?>

    <?php // echo $form->field($model, 'subCompanyManagerName') ?>

    <?php // echo $form->field($model, 'subCompanyManagerID') ?>

    <?php // echo $form->field($model, 'VPName') ?>

    <?php // echo $form->field($model, 'VPID') ?>

    <?php // echo $form->field($model, 'subCompanyTeamBuildName') ?>

    <?php // echo $form->field($model, 'subCompanyTeamBuildID') ?>

    <?php // echo $form->field($model, 'qixiDate') ?>

    <?php // echo $form->field($model, 'nextfanxiDate') ?>

    <?php // echo $form->field($model, 'innerComments') ?>

    <?php // echo $form->field($model, 'companyID') ?>

    <?php // echo $form->field($model, 'deptID') ?>

    <?php // echo $form->field($model, 'companyName') ?>

    <?php // echo $form->field($model, 'deptName') ?>

    <?php // echo $form->field($model, 'renewContractComment') ?>

    <?php // echo $form->field($model, 'oralContractNo') ?>

    <?php // echo $form->field($model, 'renewContractNo') ?>

    <?php // echo $form->field($model, 'addressID') ?>

    <?php // echo $form->field($model, 'phoneID') ?>

    <?php // echo $form->field($model, 'renewDate') ?>

    <?php // echo $form->field($model, 'jixiaoDate') ?>

    <?php // echo $form->field($model, 'postType') ?>

    <?php // echo $form->field($model, 'sourceSuperMarketID') ?>

    <?php // echo $form->field($model, 'arrangeWork') ?>

    <?php // echo $form->field($model, 'payBankAmtDtl') ?>

    <?php // echo $form->field($model, 'workflowSeqNo') ?>

    <?php // echo $form->field($model, 'investDate') ?>

    <?php // echo $form->field($model, 'lateReturn') ?>

    <?php // echo $form->field($model, 'paymentAmount') ?>

    <?php // echo $form->field($model, 'changeRightDate') ?>

    <?php // echo $form->field($model, 'shijiDaoZhangDate') ?>

    <?php // echo $form->field($model, 'fenhongTimes') ?>

    <?php // echo $form->field($model, 'investType') ?>

    <?php // echo $form->field($model, 'recycleDesc') ?>
    <br/><br/><br/><br/>
    <div class="form-group">
        <?= Html::submitButton('搜索', ['class' => 'btn btn-primary','style'=>'margin-left:20px;']) ?>
        <?= Html::resetButton('返回', ['class' => 'btn btn-default','id'=>'ResetClick']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>
<script>
    $("#ResetClick").click(function(){
        location.href=history.go(-1);
    });
</script>
