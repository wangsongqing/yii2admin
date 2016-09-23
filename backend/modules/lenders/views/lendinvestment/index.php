<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\lenders\models\LendinvestmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '投资管理';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/statics/assets/data-tables/DT_bootstrap.css', ['depends'=>'backend\assets\AppAsset']);

?>
<section class="wrapper site-min-height">
    <!-- page start-->
    <section class="panel">
        <header class="panel-heading">
            <?=$this->title?>
        </header>
        <?= $this->render('_search', [
        'model' => $searchModel,
    ]) ?>
        <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix">
                    
                </div>
                <div class="space15"></div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped table-hover table-bordered',
            'id' => 'editable-sample',
        ],
        'pager' => [
            'prevPageLabel' => '上一页',
            'nextPageLabel' => '下一页',
        ],
        //让分页移动到最右边 layout
        'layout'=> '{items}
            <div class="row">
                <div class="col-lg-6">
                    <div class="dataTables_info" id="editable-sample_info">{summary}</div>
                </div>
                <div class="col-lg-6">
                    <div class="dataTables_paginate paging_bootstrap pagination">{pager}</div>
                </div>
            </div>',
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

//            'lendInvestID',
            [
                'attribute'=>'lendInvestID',
                'value'=>'lendInvestID',
                'label'=>'投资ID',
            ],
//            'lenderID',
//            'lendInvestNo',
//            'lendType',
//            'applyInvestDate',
             'expireDate',
             'investAmt',
//             'surplusAmt',
            // 'toinvestDate',
             'investRate',
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
             'contractNo',
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

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}{delete}',
//                'buttons'=>[
//                    //自定义审核按钮 {audit}
//                    'audit'=>function($url, $model, $key){
//                    $options = [
//                        'title' => '审批',
//                        'aria-label' => '审批',
//                        'data-pjax' => '0',
//                    ];
////                        return Html::a('<span class="glyphicon glyphicon-user"></span>', $url, $options);图标
//                        return Html::a('<span class="glyphicon">审批</span>', $url, $options);//字体样式
//                    }
//                ],
            ],
        ],
    ]); ?>
</div>
        </div>
    </section>
    <!-- page end-->
</section>
