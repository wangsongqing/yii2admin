<?php

namespace app\modules\lenders\models;

use Yii;

/**
 * This is the model class for table "rah_lendinvestment".
 *
 * @property integer $lendInvestID
 * @property integer $lenderID
 * @property string $lendInvestNo
 * @property string $lendType
 * @property string $applyInvestDate
 * @property string $expireDate
 * @property string $investAmt
 * @property string $surplusAmt
 * @property string $toinvestDate
 * @property double $investRate
 * @property string $recycleType
 * @property string $investStatus
 * @property string $paymentType
 * @property string $submitDate
 * @property string $toWithholdDate
 * @property integer $isDeleted
 * @property string $createTime
 * @property string $createUser
 * @property string $updateTime
 * @property string $updateUser
 * @property string $RepaymentDay
 * @property string $curIncomes
 * @property string $curIncomesRate
 * @property string $discountRate
 * @property string $comments
 * @property string $payBankID
 * @property string $receiveBankID
 * @property string $contractNo
 * @property string $lenderNo
 * @property integer $seqNo
 * @property string $transferBankName
 * @property string $transferedUser
 * @property string $transferedDate
 * @property string $generatedRightSeqNo
 * @property string $generatedRightDate
 * @property integer $isRightConfirmed
 * @property integer $isRedeemed
 * @property string $redeemDate
 * @property string $address
 * @property string $billDate
 * @property string $redeemType
 * @property string $querenshuTime
 * @property string $fangkuanBankName
 * @property string $fangkuanTime
 * @property string $fangkuanAmt
 * @property string $firstDate
 * @property integer $billcount
 * @property string $jieqingTime
 * @property string $redeemAmt
 * @property string $redeemOverDate
 * @property integer $investMonth
 * @property string $customerManagerName
 * @property integer $customerManagerID
 * @property string $teamManagerName
 * @property integer $teamManagerID
 * @property string $operateManagerName
 * @property integer $operateManagerID
 * @property string $yunYingManagerName
 * @property integer $yunYingManagerID
 * @property string $yunYingManagerTeamBuildName
 * @property integer $yunYingManagerTeamBuildNameID
 * @property string $subCompanyManagerName
 * @property integer $subCompanyManagerID
 * @property string $VPName
 * @property integer $VPID
 * @property string $subCompanyTeamBuildName
 * @property integer $subCompanyTeamBuildID
 * @property string $qixiDate
 * @property string $nextfanxiDate
 * @property string $innerComments
 * @property integer $companyID
 * @property integer $deptID
 * @property string $companyName
 * @property string $deptName
 * @property string $renewContractComment
 * @property string $oralContractNo
 * @property string $renewContractNo
 * @property integer $addressID
 * @property integer $phoneID
 * @property string $renewDate
 * @property string $jixiaoDate
 * @property string $postType
 * @property integer $sourceSuperMarketID
 * @property integer $arrangeWork
 * @property string $payBankAmtDtl
 * @property integer $workflowSeqNo
 * @property integer $investDate
 * @property string $lateReturn
 * @property string $paymentAmount
 * @property string $changeRightDate
 * @property string $shijiDaoZhangDate
 * @property integer $fenhongTimes
 * @property string $investType
 * @property string $recycleDesc
 */
class Lendinvestment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rah_lendinvestment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lenderID', 'isDeleted', 'receiveBankID', 'seqNo', 'generatedRightSeqNo', 'isRightConfirmed', 'isRedeemed', 'billcount', 'investMonth', 'customerManagerID', 'teamManagerID', 'operateManagerID', 'yunYingManagerID', 'yunYingManagerTeamBuildNameID', 'subCompanyManagerID', 'VPID', 'subCompanyTeamBuildID', 'companyID', 'deptID', 'addressID', 'phoneID', 'sourceSuperMarketID', 'arrangeWork', 'workflowSeqNo', 'investDate', 'fenhongTimes'], 'integer'],
            [['applyInvestDate', 'expireDate', 'toinvestDate', 'submitDate', 'toWithholdDate', 'createTime', 'updateTime', 'transferedDate', 'generatedRightDate', 'redeemDate', 'querenshuTime', 'fangkuanTime', 'firstDate', 'jieqingTime', 'redeemOverDate', 'qixiDate', 'nextfanxiDate', 'renewDate', 'jixiaoDate', 'changeRightDate', 'shijiDaoZhangDate'], 'safe'],
            [['investAmt', 'surplusAmt', 'investRate', 'curIncomes', 'curIncomesRate', 'discountRate', 'fangkuanAmt', 'redeemAmt', 'lateReturn', 'paymentAmount'], 'number'],
            [['lendInvestNo', 'recycleType', 'updateUser', 'RepaymentDay', 'customerManagerName', 'teamManagerName', 'operateManagerName', 'yunYingManagerName', 'yunYingManagerTeamBuildName', 'subCompanyManagerName', 'VPName', 'subCompanyTeamBuildName'], 'string', 'max' => 20],
            [['lendType', 'investStatus', 'createUser', 'contractNo', 'lenderNo', 'transferedUser', 'renewContractComment', 'oralContractNo', 'renewContractNo', 'postType', 'payBankAmtDtl', 'investType', 'recycleDesc'], 'string', 'max' => 50],
            [['paymentType', 'payBankID', 'address', 'billDate', 'fangkuanBankName', 'companyName', 'deptName'], 'string', 'max' => 100],
            [['comments', 'innerComments'], 'string', 'max' => 500],
            [['transferBankName', 'redeemType'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'lendInvestID' => \Yii::t('app','Lend Invest'),
            'lenderID' => \Yii::t('app','Lender'),
            'lendInvestNo' => \Yii::t('app','Lend Invest No'),
            'lendType' => \Yii::t('app','Lend Type'),
            'applyInvestDate' => \Yii::t('app','Apply Invest Date'),
            'expireDate' => '到期日期',
            'investAmt' => '投资金额(万元)',
            'toinvestDate' => \Yii::t('app','Toinvest Date'),
            'investRate' => '投资收益率(%)',
            'recycleType' => '产品名称',
            'investStatus' => \Yii::t('app','Invest Status'),
            'paymentType' => '支付方式',
            'submitDate' => \Yii::t('app','Submit Date'),
            'toWithholdDate' => \Yii::t('app','To Withhold Date'),
            'isDeleted' => \Yii::t('app','Is Deleted'),
            'createTime' => \Yii::t('app','Create Time'),
            'createUser' => \Yii::t('app','Create User'),
            'updateTime' => \Yii::t('app','Update Time'),
            'updateUser' => \Yii::t('app','Update User'),
            'RepaymentDay' => \Yii::t('app','Repayment Day'),
            'curIncomes' => \Yii::t('app','Cur Incomes'),
            'curIncomesRate' => '当前投资利率(%)',
            'discountRate' => \Yii::t('app','Discount Rate'),
            'payBankID' => \Yii::t('app','Pay Bank'),
            'receiveBankID' => '回款银行账户', // \Yii::t('app','Receive Bank'),
            'comments' => '备注',
            'contractNo' => '合同编号',
            'lenderNo' => \Yii::t('app','Lender No'),
            'seqNo' => \Yii::t('app','Seq No'),
            'transferBankName' => '汇入融信银行帐号',
            'generatedRightSeqNo' => '债权序列号',
            'generatedRightDate' => '债权匹配日期',
            'isRightConfirmed' => '债权是否确认',
            'billDate' => '上传汇款凭证日期',
            'redeemDate' => '赎回日期',
            'redeemType' => '赎回类型',
            'address' => '客户所在地',
            'querenshuTime' => '进账日期',
            'fangkuanBankName' => '打款银行及帐号',
            'fangkuanTime' => '打款日期',
            'fangkuanAmt' => '应支付受让人金额',
            'redeemAmt' => '赎回金额(万元)',
            'redeemOverDate' => '赎回结算日期',
            'transferedUser' => '所属客户经理',
            'customerManagerID' => '客户经理ID',
            'customerManagerName' => '客户经理',
            'teamManagerID' => '市场经理ID',
            'teamManagerName' => '市场经理',
            'operateManagerID' => '市场总监ID',
            'operateManagerName' => '市场总监',
            'yunYingManagerName' => '副总经理',
            'yunYingManagerID' => '副总经理ID',
            'subCompanyManagerID' => '总经理ID',
            'subCompanyManagerName' => '总经理',
            'VPID' => '大区总经理ID',
            'VPName' => '大区总经理',
            'subCompanyTeamBuildName' => '分公司经理团建',
            'subCompanyTeamBuildID' => '分公司经理团建ID',
            'investMonth' => '投资月数',
            'investDate' => '投资天数',
            'qixiDate' => '收益计算日期',
            'innerComments' => '内部备注',
            'firstDate' => '下一报告日',
            'companyName' => '公司名称',
            'deptName' => '部门名称',
            'oralContractNo' => '原合同号',
            'renewContractNo' => '续投编号',
            'phoneID' => '电话',
            'addressID' => '联系地址/邮编',
            'renewDate' => '续期日期',
            'jixiaoDate' => '绩效日期',
            'postType' => '邮寄方式',
            'sourceSuperMarketID' => '渠道来源',
            'arrangeWork' => '是否排班',
            'payBankAmtDtl' => '划扣银行金额明细',
            'surplusAmt' => '剩余金额(万元)',
            'lateReturn' => '支付金额(万元)',
            'paymentAmount' => '预期投资收益(元)',
            'shijiDaoZhangDate' => '实际到账日期',
            'fenhongTimes' => '已分红次数',
            'investType' => '产品类型',
            'recycleDesc' => '产品名称',
        ];
    }
}
