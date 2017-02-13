<?php

use yii\helpers\Html;
use common\components\XDetailView; //命名空间规则引用类

/* @var $this yii\web\View */
/* @var $model app\models\Lendinvestment */

$this->title = '查看投资详情 '.'投资ID:'.$model->lendInvestID;
$this->params['breadcrumbs'][] = ['label' => 'Lendinvestments', 'url' => ['index']];
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
                     <p>
                        <?= Html::a('修 改', ['update', 'id' => $model->lenderID], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('删 除', ['delete', 'id' => $model->lenderID], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    <div class="row">
                        <div class="col-lg-11">

    <?= XDetailView::widget([
        'model' => $model,
        'ItemColumns'=>3,//每行显示几条数据
        'attributes' => [
//            'lendInvestID',
//            'lenderID',
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
                    </div>
                </div>
            </section>
        </div>

    </div>
    </section>
