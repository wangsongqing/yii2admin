<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rah_combox".
 *
 * @property integer $comboxID
 * @property string $comboxName
 * @property string $itemName
 * @property string $itemValue
 * @property integer $orderNo
 */
class Combox extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rah_combox';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderNo'], 'integer'],
            [['comboxName'], 'string', 'max' => 20],
            [['itemName', 'itemValue'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comboxID' => 'Combox ID',
            'comboxName' => 'Combox Name',
            'itemName' => 'Item Name',
            'itemValue' => 'Item Value',
            'orderNo' => 'Order No',
        ];
    }
    
    public static function returnChinesesType($coxName,$itemValue){
      $model = self::find()->filterWhere(['comboxName'=>$coxName,'itemValue'=>$itemValue])->one();
      if(!empty($model)){
            return $model->itemName;
        }
    }
    
    public static function comboxNameBack($comboxName=''){
        $model = self::find()->where(['comboxName'=>$comboxName])->all();
        if(!empty($model)){
            $_arr = objToArray($model,['itemValue','itemName']);
            return $_arr;
        }
    }
    
    
}
