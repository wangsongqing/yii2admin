<?php
namespace common\components;
use Yii;
use yii\web\Controller;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * //登录控制，只有后台项目只有登录才能访问
 * this controller is login.if not login redirest login.php
 */

class BeController extends Controller{
    
    public function beforeAction($action){
        parent::beforeAction($action);
        
            if (Yii::$app->user->isGuest){
                $loginAction = Yii::$app->controller->action->id;
                if($loginAction!=='login'){
                    return $this->goHome();
                }
            }
            return true;
    }
}