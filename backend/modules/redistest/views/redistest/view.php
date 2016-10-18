<?php

use yii\helpers\Html;
use common\components\XDetailView; //命名空间规则引用类

/* @var $this yii\web\View */
/* @var $model app\models\Lendinvestment */

// $this->title = '查看投资详情 '.'投资ID:'.$model->id;
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
                        <?= Html::a('修 改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('删 除', ['delete', 'id' => $model->id], [
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
            'name',
            'address',
        ],
    ]) ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    </section>
