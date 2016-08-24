<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rah_lender".
 *
 * @property integer $lenderID
 * @property string $userName
 * @property string $englishName
 * @property string $IDType
 * @property string $custSeqNo
 * @property string $email
 * @property string $phone
 * @property string $birthday
 * @property string $tel
 * @property string $fax
 * @property string $webSite
 * @property string $province
 * @property string $city
 * @property string $county
 * @property string $billAddress
 * @property string $billPostCode
 * @property string $customerStatus
 * @property string $intention
 * @property string $accountStatus
 * @property string $accountDate
 * @property integer $isDeleted
 * @property string $identityNo
 * @property string $education
 * @property string $gender
 * @property string $duty
 * @property string $companyName
 * @property string $customerMantainUser
 * @property string $customerAuth
 * @property string $comments
 * @property string $signContractDate
 * @property string $contractNo
 * @property string $createTime
 * @property string $createUser
 * @property string $updateTime
 * @property string $updateUser
 * @property string $owner
 * @property string $lenderFrom
 * @property string $paymentType
 * @property string $transferedUser
 * @property string $transferedDate
 * @property string $team
 * @property string $Source
 * @property double $Grade
 * @property string $signContractAddress
 * @property integer $customerManagerID
 * @property string $customerManagerName
 * @property integer $teamManagerID
 * @property string $teamManagerName
 * @property integer $operateManagerID
 * @property string $operateManagerName
 * @property string $yunYingManagerName
 * @property integer $yunYingManagerID
 * @property integer $subCompanyManagerID
 * @property string $subCompanyManagerName
 * @property integer $subCompanyTeamBuildID
 * @property string $subCompanyTeamBuildName
 * @property integer $VPID
 * @property string $VPName
 * @property string $yunYingManagerTeamBuildName
 * @property integer $yunYingManagerTeamBuildID
 * @property string $nickName
 * @property integer $sourceSuperMarketID
 * @property integer $arrangeWork
 * @property string $SignDate
 * @property integer $ClaimAddress
 * @property string $PayDate
 * @property string $nationality
 */
class Lender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rah_lender';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthday', 'accountDate', 'signContractDate', 'createTime', 'updateTime', 'transferedDate', 'SignDate', 'PayDate'], 'safe'],
            [['isDeleted', 'customerManagerID', 'teamManagerID', 'operateManagerID', 'yunYingManagerID', 'subCompanyManagerID', 'subCompanyTeamBuildID', 'VPID', 'yunYingManagerTeamBuildID', 'sourceSuperMarketID', 'arrangeWork', 'ClaimAddress'], 'integer'],
            [['Grade'], 'number'],
            [['userName', 'province', 'county', 'duty', 'companyName', 'customerMantainUser', 'customerAuth', 'createUser', 'owner', 'transferedUser', 'Source', 'signContractAddress'], 'string', 'max' => 50],
            [['englishName', 'IDType', 'phone', 'webSite', 'education', 'contractNo', 'updateUser', 'team', 'customerManagerName', 'teamManagerName', 'operateManagerName', 'yunYingManagerName', 'subCompanyManagerName', 'subCompanyTeamBuildName', 'VPName', 'yunYingManagerTeamBuildName', 'nickName'], 'string', 'max' => 20],
            [['custSeqNo', 'email', 'city'], 'string', 'max' => 32],
            [['tel', 'identityNo'], 'string', 'max' => 30],
            [['fax'], 'string', 'max' => 15],
            [['billAddress'], 'string', 'max' => 200],
            [['billPostCode', 'customerStatus', 'intention', 'accountStatus', 'gender'], 'string', 'max' => 10],
            [['comments'], 'string', 'max' => 500],
            [['lenderFrom', 'paymentType', 'nationality'], 'string', 'max' => 100],
            [['userName','phone','identityNo'],'required'],
            [['identityNo'],'match','pattern'=>'/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/','message'=>'身份证号码格式错误'],
            [['phone'],'match','pattern'=>'/^1[3|4|5|8][0-9]\d{8}$/','message'=>'手机号格式码不正确'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lenderID' => '客户ID',
            'userName' => '客户名',
            'englishName' => '英语名字',
            'IDType' => 'Idtype',
            'custSeqNo' => 'Cust Seq No',
            'email' => '邮件',
            'phone' => '手机',
            'birthday' => '生日',
            'tel' => '电话',
            'fax' => 'Fax',
            'webSite' => 'Web Site',
            'province' => '省份',
            'city' => '城市',
            'county' => '国家',
            'billAddress' => 'Bill Address',
            'billPostCode' => 'Bill Post Code',
            'customerStatus' => '客户经理',
            'intention' => 'Intention',
            'accountStatus' => 'Account Status',
            'accountDate' => 'Account Date',
            'isDeleted' => 'Is Deleted',
            'identityNo' => '身份证号',
            'education' => 'Education',
            'gender' => '性别',
            'duty' => '职位',
            'companyName' => '公司名字',
            'customerMantainUser' => 'Customer Mantain User',
            'customerAuth' => 'Customer Auth',
            'comments' => 'Comments',
            'signContractDate' => 'Sign Contract Date',
            'contractNo' => 'Contract No',
            'createTime' => '创建时间',
            'createUser' => '创建人',
            'updateTime' => '更新时间',
            'updateUser' => '更新人',
            'owner' => 'Owner',
            'lenderFrom' => 'Lender From',
            'paymentType' => 'Payment Type',
            'transferedUser' => 'Transfered User',
            'transferedDate' => 'Transfered Date',
            'team' => 'Team',
            'Source' => 'Source',
            'Grade' => 'Grade',
            'signContractAddress' => 'Sign Contract Address',
            'customerManagerID' => 'Customer Manager ID',
            'customerManagerName' => 'Customer Manager Name',
            'teamManagerID' => 'Team Manager ID',
            'teamManagerName' => 'Team Manager Name',
            'operateManagerID' => 'Operate Manager ID',
            'operateManagerName' => 'Operate Manager Name',
            'yunYingManagerName' => 'Yun Ying Manager Name',
            'yunYingManagerID' => 'Yun Ying Manager ID',
            'subCompanyManagerID' => 'Sub Company Manager ID',
            'subCompanyManagerName' => 'Sub Company Manager Name',
            'subCompanyTeamBuildID' => 'Sub Company Team Build ID',
            'subCompanyTeamBuildName' => 'Sub Company Team Build Name',
            'VPID' => 'Vpid',
            'VPName' => 'Vpname',
            'yunYingManagerTeamBuildName' => 'Yun Ying Manager Team Build Name',
            'yunYingManagerTeamBuildID' => 'Yun Ying Manager Team Build ID',
            'nickName' => 'Nick Name',
            'sourceSuperMarketID' => 'Source Super Market ID',
            'arrangeWork' => 'Arrange Work',
            'SignDate' => 'Sign Date',
            'ClaimAddress' => 'Claim Address',
            'PayDate' => 'Pay Date',
            'nationality' => 'Nationality',
        ];
    }
}
