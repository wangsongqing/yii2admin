<?php

namespace app\models;

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
            'phoneID' => '电话ID',
            'borrowerID' => 'Borrower ID',
            'lenderID' => 'Lender ID',
            'userName' => '机主姓名',
            'phone' => '手机号码',
            'tel' => 'Tel',
            'updateUser' => '更新时间',
            'updateTime' => '创建时间',
        ];
    }
    
    public static function addNewPhone($model){
        $PhoneModel = new self();
        $PhoneModel->lenderID = $model->lenderID;
        $PhoneModel->userName = $model->userName;
        $PhoneModel->phone = $model->phone;
        $PhoneModel->save();
    }
    
    public static function getCount(){
        return '12';
    }
     public function search($params,$lenderID='')
    {
        $query = self::find();

        // add conditions that should always apply here
        $query->where(['lenderID'=>$lenderID]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 5], //设置每个页面显示几条数据
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
//             $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lenderID' => $this->lenderID,
        ]);

        $query->andFilterWhere(['like', 'userName', $this->userName]);

        return $dataProvider;
    }
}
