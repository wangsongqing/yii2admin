<?php

namespace app\modules\lenders\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "rah_lenderphone".
 *
 * @property integer $phoneID
 * @property integer $borrowerID
 * @property integer $lenderID
 * @property string $userName
 * @property string $phone
 * @property string $tel
 * @property string $updateUser
 * @property string $updateTime
 */
class Lenderphone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rah_lenderphone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['borrowerID', 'lenderID'], 'integer'],
            [['updateTime'], 'safe'],
            [['userName', 'updateUser'], 'string', 'max' => 50],
            [['phone', 'tel'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phoneID' => 'Phone ID',
            'borrowerID' => 'Borrower ID',
            'lenderID' => 'Lender ID',
            'userName' => 'User Name',
            'phone' => 'Phone',
            'tel' => 'Tel',
            'updateUser' => 'Update User',
            'updateTime' => 'Update Time',
        ];
    }
    
    public function search($lenderID=''){
         $query = self::find();

        // add conditions that should always apply here
        $query->where(['lenderID'=>$lenderID]); //添加查询条件
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10], //设置每个页面显示几条数据
        ]);
        return $dataProvider;
    }
    
    public static function addNewPhone($phoneModel){
        $model = new self;
        $model->lenderID = $phoneModel->lenderID;
        $model->userName = $phoneModel->userName;
        $model->phone = $phoneModel->phone;
        $model->save();
    }
}
