<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Combox;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel izyue\admin\models\AuthItemSearch */

$this->title = '客户管理';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile('@web/statics/assets/data-tables/DT_bootstrap.css', ['depends'=>'backend\assets\AppAsset']);

?>

<section class="wrapper site-min-height">
    <!-- page start-->
    <section class="panel">
        <header class="panel-heading">
            <?=$this->title?>
        </header>
        <div class="panel-body">
            <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                        <?= Html::a('创建客户'.' <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-success', 'style' => 'margin-bottom:15px;']) ?>
                    </div>
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
        'columns' => [
//            ['class' => 'yii\grid\CheckboxColumn'],//多选
            'lenderID',
            'userName',
//            'phone',
            [
                'label' => "手机",
                'filter' => Html::activeTextInput($searchModel, 'phone', ['class' => 'form-control']),
                'value' => function ($model) {
                    return $model->phone;
                },
            ],
            [
                'attribute'=>'IDType',
                'value'=>function($model){
                    return Combox::returnChinesesType('证件类型',$model->IDType);
                }
            ],
            [
                'attribute'=>'identityNo',
                'value'=>'identityNo',
                'label'=>'身份证',
            ],
            [
                'attribute'=>'gender',
                'value'=>'gender',
                'filter' => ['男'=>'男','女'=>'女'],
            ],
//            'englishName',
//            'IDType',
//            'custSeqNo',
            'createTime',
            
            // 'email:email',
            // 'birthday',
            // 'tel',
            // 'fax',
            // 'webSite',
            // 'province',
            // 'city',
            // 'county',
            // 'billAddress',
            // 'billPostCode',
            // 'customerStatus',
            // 'intention',
            // 'accountStatus',
            // 'accountDate',
            // 'isDeleted',
            // 'identityNo',
            // 'education',
            // 'gender',
            // 'duty',
            // 'companyName',
            // 'customerMantainUser',
            // 'customerAuth',
            // 'comments',
            // 'signContractDate',
            // 'contractNo',
            // 'createTime',
            // 'createUser',
            // 'updateTime',
            // 'updateUser',
            // 'owner',
            // 'lenderFrom',
            // 'paymentType',
            // 'transferedUser',
            // 'transferedDate',
            // 'team',
            // 'Source',
            // 'Grade',
            // 'signContractAddress',
            // 'customerManagerID',
            // 'customerManagerName',
            // 'teamManagerID',
            // 'teamManagerName',
            // 'operateManagerID',
            // 'operateManagerName',
            // 'yunYingManagerName',
            // 'yunYingManagerID',
            // 'subCompanyManagerID',
            // 'subCompanyManagerName',
            // 'subCompanyTeamBuildID',
            // 'subCompanyTeamBuildName',
            // 'VPID',
            // 'VPName',
            // 'yunYingManagerTeamBuildName',
            // 'yunYingManagerTeamBuildID',
            // 'nickName',
            // 'sourceSuperMarketID',
            // 'arrangeWork',
            // 'SignDate',
            // 'ClaimAddress',
            // 'PayDate',
            // 'nationality',
            
            ['class' => 'yii\grid\ActionColumn','header'=>'操作'],
        ],
    ]); ?>
            </div>
        </div>
    </section>
    <!-- page end-->
</section>
