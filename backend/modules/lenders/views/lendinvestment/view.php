<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\lenders\models\Lendinvestment */

$this->title = $model->lendInvestID;
$this->params['breadcrumbs'][] = ['label' => 'Lendinvestments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lendinvestment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->lendInvestID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->lendInvestID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'lendInvestID',
            'lenderID',
            'lendInvestNo',
            'lendType',
            'applyInvestDate',
            'expireDate',
            'investAmt',
            'surplusAmt',
            'toinvestDate',
            'investRate',
            'recycleType',
            'investStatus',
            'paymentType',
            'submitDate',
            'toWithholdDate',
            'isDeleted',
            'createTime',
            'createUser',
            'updateTime',
            'updateUser',
            'RepaymentDay',
            'curIncomes',
            'curIncomesRate',
            'discountRate',
            'comments',
            'payBankID',
            'receiveBankID',
            'contractNo',
            'lenderNo',
            'seqNo',
            'transferBankName',
            'transferedUser',
            'transferedDate',
            'generatedRightSeqNo',
            'generatedRightDate',
            'isRightConfirmed',
            'isRedeemed',
            'redeemDate',
            'address',
            'billDate',
            'redeemType',
            'querenshuTime',
            'fangkuanBankName',
            'fangkuanTime',
            'fangkuanAmt',
            'firstDate',
            'billcount',
            'jieqingTime',
            'redeemAmt',
            'redeemOverDate',
            'investMonth',
            'customerManagerName',
            'customerManagerID',
            'teamManagerName',
            'teamManagerID',
            'operateManagerName',
            'operateManagerID',
            'yunYingManagerName',
            'yunYingManagerID',
            'yunYingManagerTeamBuildName',
            'yunYingManagerTeamBuildNameID',
            'subCompanyManagerName',
            'subCompanyManagerID',
            'VPName',
            'VPID',
            'subCompanyTeamBuildName',
            'subCompanyTeamBuildID',
            'qixiDate',
            'nextfanxiDate',
            'innerComments',
            'companyID',
            'deptID',
            'companyName',
            'deptName',
            'renewContractComment',
            'oralContractNo',
            'renewContractNo',
            'addressID',
            'phoneID',
            'renewDate',
            'jixiaoDate',
            'postType',
            'sourceSuperMarketID',
            'arrangeWork',
            'payBankAmtDtl',
            'workflowSeqNo',
            'investDate',
            'lateReturn',
            'paymentAmount',
            'changeRightDate',
            'shijiDaoZhangDate',
            'fenhongTimes:datetime',
            'investType',
            'recycleDesc',
        ],
    ]) ?>

</div>
