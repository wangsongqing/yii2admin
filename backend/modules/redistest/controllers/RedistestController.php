<?php

namespace app\modules\redistest\controllers;

use Yii;
use app\modules\redistest\models\Customer;
use app\modules\redistest\models\CustomerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Customer implements the CRUD actions for Lender model.
 */
class RedistestController extends Controller
{	
	// public $layout=false; 


	/**
	 * add 
	 */
    public function actionCreate(){
         $model = new Customer();
        $post = Yii::$app->request->post('Customer');
        if($post){
            $model->name = $post['name'];
            $model->address = $post['address'];
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        
        return $this->render('create', [
                'model' => $model,
            ]);
    }


    /**
     * view 
     */

    public function actionView($id){
        $model = Customer::find()->where(['id' => $id])->one(); // find by query
        
        return $this->render('view',[
                'model'=>$model,
            ]);
    }


    public function actionIndex(){
        $searchModel = new CustomerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
	 * update 
	 */
    public function actionUpdate($id){
    	$model = Customer::find()->where(['id' => $id])->one();
        $post  = Yii::$app->request->post('Customer');
        if($post){
            $model->name = $post['name'];
            $model->address = $post['address'];
            if($model->save()){
                $this->redirect(['view','id'=>$id]);
            }
        }

        return $this->render('update',[
            'model'=>$model
        ]);
    	
    }

    

    /**
	 * delete data
	 */
    public function actionDelete($id){
    	$customer = Customer::find()->where(['id' => $id])->one();//删除$id的数据
        $customer->delete();
        return $this->redirect(['index']);
    	
    }

    /**
     * clear all data
     */
    public function actionFlushall(){
    	$redis = Yii::$app->redis;
    	$redis->flushall();
    }

    
}
