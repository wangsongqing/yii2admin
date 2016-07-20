<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\XDetailView; //命名空间规则引用类

/* @var $this yii\web\View */
/* @var $model app\models\Lender */

$this->title = $model->lenderID;
$this->params['breadcrumbs'][] = ['label' => 'Lenders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="lender-view">-->
    
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
            'lenderID',
            'userName',
            'englishName',
            'IDType',
            'custSeqNo',
            'email:email',
            'phone',
            'birthday',
            'tel',
            'fax',
            'webSite',
            'province',
            'city',
            'county',
            'billAddress',
            'billPostCode',
            'customerStatus',
            'intention',
            'accountStatus',
            'accountDate',
            'isDeleted',
            'identityNo',
            'education',
            'gender',
            'duty',
            'companyName',
            'customerMantainUser',
            'customerAuth',
            'comments',
            'signContractDate',
            'contractNo',
            'createTime',
            'createUser',
            'updateTime',
            'updateUser',
            'owner',
            'lenderFrom',
            'paymentType',
            'transferedUser',
            'transferedDate',
            'team',
            'Source',
            'Grade',
            'signContractAddress',
            'customerManagerID',
            'customerManagerName',
            'teamManagerID',
            'teamManagerName',
            'operateManagerID',
            'operateManagerName',
            'yunYingManagerName',
            'yunYingManagerID',
            'subCompanyManagerID',
            'subCompanyManagerName',
            'subCompanyTeamBuildID',
            'subCompanyTeamBuildName',
            'VPID',
            'VPName',
            'yunYingManagerTeamBuildName',
            'yunYingManagerTeamBuildID',
            'nickName',
            'sourceSuperMarketID',
            'arrangeWork',
            'SignDate',
            'ClaimAddress',
            'PayDate',
            'nationality',
        ],
    ]) ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</section>
