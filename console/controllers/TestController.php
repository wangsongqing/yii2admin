<?php 
namespace console\controllers;
use Yii;
use yii\console\Controller;
use app\models\Lender;
 
class TestController extends Controller
{
    public function actionTest()
    {
//        $connection = Yii::$app->db;
//        $sql = "select * from admin";
//        $command = $connection->createCommand($sql);
//        $res = $command->queryOne();
//        echo $res['username'];
        $model = Lender::findOne('1');
        echo $model->userName;
    }
}