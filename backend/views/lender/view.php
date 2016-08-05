<?php

use yii\helpers\Html;
use app\models\Lenderphone;
use yii\widgets\DetailView;
use yii\grid\GridView;
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
                             <?php 
 $query = new Lenderphone();
 $dataProvider = $query->search($model,$model->lenderID);
 echo GridView::widget([
      'dataProvider' => $dataProvider,
      'columns' => [
          'phoneID',
          'userName',
          'phone',
          [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{user-view} {user-update} {user-delete}',
                'buttons' => [
                    'user-view' => function ($url, $model, $key) {
                        //$url = Yii::$app->urlManager->createUrl(['lender/view','id'=>$model->lenderID]);
                        $options = [
                          'title' => Yii::t('yii', 'View'),
                          'aria-label' => Yii::t('yii', 'View'),
                          'data-pjax' => '0',
                        ];
                        $phone = $model->phone;
                        return Html::a('<span class="glyphicon" data-toggle="modal" data-target="#myModal" phone="'.$phone.'">查看</span>', 'javascript::', $options);
                      },
//                      'user-update' => function ($url, $model, $key) {
//                        $url = Yii::$app->urlManager->createUrl(['lender/update','id'=>$model->lenderID]);
//                        $options = [
//                          'title' => Yii::t('yii', 'update'),
//                          'aria-label' => Yii::t('yii', 'update'),
//                          'data-pjax' => '0',
//                        ];
//                        return Html::a('<span class="glyphicon">编辑</span>', $url, $options);
//                      },
//                      'user-delete' => function ($url, $model, $key) {
//                        $url = Yii::$app->urlManager->createUrl(['lender/delete','id'=>$model->lenderID]);
//                        $options = [
//                          'title' => Yii::t('yii', 'delete'),
//                          'aria-label' => Yii::t('yii', 'delete'),
//                          'data-pjax' => '0',
//                        ];
//                        return Html::a('<span class="glyphicon">删除</span>', $url, $options);
//                      },
                ],
            ],
      ],
  ]) ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               查看手机号码
            </h4>
         </div>
         <div class="modal-body">
             <h1 id="phone_is"></h1>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
            <button type="button" class="btn btn-primary">
               提交更改
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
<script>
   $(".glyphicon").click(function(){
       var phone = $(this).attr('phone');
       $("#phone_is").html(phone);
   });
    </script>
