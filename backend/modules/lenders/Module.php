<?php

namespace app\modules\lenders;

use Yii;
/**
 * lenders module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\lenders\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        // it must login.if not login redirect login.php
        if (Yii::$app->user->isGuest){
            return Yii::$app->response->redirect(Yii::$app->homeUrl);
        }
    }
}
