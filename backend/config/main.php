<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'language' => 'zh-CN',
    'modules' => [
        'admin' => [
            'class' => 'izyue\admin\Module',
//            'layout' => 'left-menu',
            'layout' => '@app/views/layouts/main.php',
        ],
        'gii'=>[
            'class'=>'yii\gii\Module',
            //'password'=>'123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'] // 按需调整这里
        ],
        'lenders'=>[
            'class'=>'app\modules\lenders\Module',
        ],
        'redistest'=>[
             'class'=>'app\modules\redistest\Module',
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\AdminModel',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        ],
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'common' => 'common.php',
                    ],
                ],
                'login' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'login' => 'login.php',
                    ],
                ],
                'signup' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'admin' => 'sginup.php',
                    ],
                ],
                'admin' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    //'basePath' => '/messages',
                    'fileMap' => [
                        'admin' => 'admin.php',
                    ],
                ],
            ],
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                 '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'help/<id:\d+>/<surname:\w+>' => 'cms/default/page',
            ],
        ],
        /**
         * mail 配置和用法
         * $mail= Yii::$app->mailer->compose();   
         * $mail->setTo('*****@qq.com');  给谁发
         * $mail->setSubject("邮件测试");  邮件标题
         * $mail->setTextBody('zheshisha ');   //发布纯文字文本
         * $mail->setHtmlBody("<h1>问我我我我我</h1>");    //发布可以带html标签的文本
         * $mail->send()
         */
        'mailer' => [  
                'class' => 'yii\swiftmailer\Mailer',  
                 'useFileTransport' =>false,//这句一定有，false发送邮件，true只是生成邮件在runtime文件夹下，不发邮件
                'transport' => [  
                    'class' => 'Swift_SmtpTransport',  
                    'host' => 'smtp.163.com',  //每种邮箱的host配置不一样
                    'username' => 'wangsongqingwork@163.com',  
                    'password' => 'baba521',  
                    'port' => '25',  
                    'encryption' => 'tls',
                ],   
                'messageConfig'=>[  
                    'charset'=>'UTF-8',  
                    'from'=>['wangsongqingwork@163.com'=>'admin']  
                    ],  
            ],  
        
    ],
//    'as access' => [
//        'class' => 'izyue\admin\components\AccessControl',
//        'allowActions' => [
//            'debug/*',
//            'site/*',
//            'gii/*',
////            'admin/log/*',
//            'admin/*',
//            'lender/*',
//            // The actions listed here will be allowed to everyone including guests.
//            // So, 'admin/*' should not appear here in the production, of course.
//            // But in the earlier stages of your development, you may probably want to
//            // add a lot of actions here until you finally completed setting up rbac,
//            // otherwise you may not even take a first step.
//            //需要rbac权限设置的时候再来研究这一块，现在先注释
//        ]
//    ],
    'params' => $params,
];
