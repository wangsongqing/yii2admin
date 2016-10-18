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
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
           'id',
           'name',
           'address',

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
