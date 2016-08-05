<?php

namespace app\models;

use Yii;

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
    
    public static function addNewPhone($model){
        $PhoneModel = new self();
        $PhoneModel->lenderID = $model->lenderID;
        $PhoneModel->userName = $model->userName;
        $PhoneModel->phone = $model->phone;
        $PhoneModel->save();
    }
}
