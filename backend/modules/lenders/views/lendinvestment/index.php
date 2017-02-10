<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\lenders\models\LendinvestmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lendinvestments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lendinvestment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lendinvestment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lendInvestID',
            'lenderID',
            'lendInvestNo',
            'lendType',
            'applyInvestDate',
            // 'expireDate',
            // 'investAmt',
            // 'surplusAmt',
            // 'toinvestDate',
            // 'investRate',
            // 'recycleType',
            // 'investStatus',
            // 'paymentType',
            // 'submitDate',
            // 'toWithholdDate',
            // 'isDeleted',
            // 'createTime',
            // 'createUser',
            // 'updateTime',
            // 'updateUser',
            // 'RepaymentDay',
            // 'curIncomes',
            // 'curIncomesRate',
            // 'discountRate',
            // 'comments',
            // 'payBankID',
            // 'receiveBankID',
            // 'contractNo',
            // 'lenderNo',
            // 'seqNo',
            // 'transferBankName',
            // 'transferedUser',
            // 'transferedDate',
            // 'generatedRightSeqNo',
            // 'generatedRightDate',
            // 'isRightConfirmed',
            // 'isRedeemed',
            // 'redeemDate',
            // 'address',
            // 'billDate',
            // 'redeemType',
            // 'querenshuTime',
            // 'fangkuanBankName',
            // 'fangkuanTime',
            // 'fangkuanAmt',
            // 'firstDate',
            // 'billcount',
            // 'jieqingTime',
            // 'redeemAmt',
            // 'redeemOverDate',
            // 'investMonth',
            // 'customerManagerName',
            // 'customerManagerID',
            // 'teamManagerName',
            // 'teamManagerID',
            // 'operateManagerName',
            // 'operateManagerID',
            // 'yunYingManagerName',
            // 'yunYingManagerID',
            // 'yunYingManagerTeamBuildName',
            // 'yunYingManagerTeamBuildNameID',
            // 'subCompanyManagerName',
            // 'subCompanyManagerID',
            // 'VPName',
            // 'VPID',
            // 'subCompanyTeamBuildName',
            // 'subCompanyTeamBuildID',
            // 'qixiDate',
            // 'nextfanxiDate',
            // 'innerComments',
            // 'companyID',
            // 'deptID',
            // 'companyName',
            // 'deptName',
            // 'renewContractComment',
            // 'oralContractNo',
            // 'renewContractNo',
            // 'addressID',
            // 'phoneID',
            // 'renewDate',
            // 'jixiaoDate',
            // 'postType',
            // 'sourceSuperMarketID',
            // 'arrangeWork',
            // 'payBankAmtDtl',
            // 'workflowSeqNo',
            // 'investDate',
            // 'lateReturn',
            // 'paymentAmount',
            // 'changeRightDate',
            // 'shijiDaoZhangDate',
            // 'fenhongTimes:datetime',
            // 'investType',
            // 'recycleDesc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
