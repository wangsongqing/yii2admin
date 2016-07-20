<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LenderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lender-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'lenderID') ?>

    <?= $form->field($model, 'userName') ?>

    <?= $form->field($model, 'englishName') ?>

    <?= $form->field($model, 'IDType') ?>

    <?= $form->field($model, 'custSeqNo') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'webSite') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'county') ?>

    <?php // echo $form->field($model, 'billAddress') ?>

    <?php // echo $form->field($model, 'billPostCode') ?>

    <?php // echo $form->field($model, 'customerStatus') ?>

    <?php // echo $form->field($model, 'intention') ?>

    <?php // echo $form->field($model, 'accountStatus') ?>

    <?php // echo $form->field($model, 'accountDate') ?>

    <?php // echo $form->field($model, 'isDeleted') ?>

    <?php // echo $form->field($model, 'identityNo') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'duty') ?>

    <?php // echo $form->field($model, 'companyName') ?>

    <?php // echo $form->field($model, 'customerMantainUser') ?>

    <?php // echo $form->field($model, 'customerAuth') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'signContractDate') ?>

    <?php // echo $form->field($model, 'contractNo') ?>

    <?php // echo $form->field($model, 'createTime') ?>

    <?php // echo $form->field($model, 'createUser') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <?php // echo $form->field($model, 'updateUser') ?>

    <?php // echo $form->field($model, 'owner') ?>

    <?php // echo $form->field($model, 'lenderFrom') ?>

    <?php // echo $form->field($model, 'paymentType') ?>

    <?php // echo $form->field($model, 'transferedUser') ?>

    <?php // echo $form->field($model, 'transferedDate') ?>

    <?php // echo $form->field($model, 'team') ?>

    <?php // echo $form->field($model, 'Source') ?>

    <?php // echo $form->field($model, 'Grade') ?>

    <?php // echo $form->field($model, 'signContractAddress') ?>

    <?php // echo $form->field($model, 'customerManagerID') ?>

    <?php // echo $form->field($model, 'customerManagerName') ?>

    <?php // echo $form->field($model, 'teamManagerID') ?>

    <?php // echo $form->field($model, 'teamManagerName') ?>

    <?php // echo $form->field($model, 'operateManagerID') ?>

    <?php // echo $form->field($model, 'operateManagerName') ?>

    <?php // echo $form->field($model, 'yunYingManagerName') ?>

    <?php // echo $form->field($model, 'yunYingManagerID') ?>

    <?php // echo $form->field($model, 'subCompanyManagerID') ?>

    <?php // echo $form->field($model, 'subCompanyManagerName') ?>

    <?php // echo $form->field($model, 'subCompanyTeamBuildID') ?>

    <?php // echo $form->field($model, 'subCompanyTeamBuildName') ?>

    <?php // echo $form->field($model, 'VPID') ?>

    <?php // echo $form->field($model, 'VPName') ?>

    <?php // echo $form->field($model, 'yunYingManagerTeamBuildName') ?>

    <?php // echo $form->field($model, 'yunYingManagerTeamBuildID') ?>

    <?php // echo $form->field($model, 'nickName') ?>

    <?php // echo $form->field($model, 'sourceSuperMarketID') ?>

    <?php // echo $form->field($model, 'arrangeWork') ?>

    <?php // echo $form->field($model, 'SignDate') ?>

    <?php // echo $form->field($model, 'ClaimAddress') ?>

    <?php // echo $form->field($model, 'PayDate') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
