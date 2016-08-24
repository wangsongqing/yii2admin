<?php 
namespace console\controllers;
use Yii;
use yii\console\Controller;
use app\models\Lender;
 
class TestController extends Controller
{   
    /**
     * 调用方式  在项目目录下面找见文件名为yii的文件   F:\projects\yii2admin>yii test/test  
     */
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