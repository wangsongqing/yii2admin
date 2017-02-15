<?php

namespace app\modules\lenders\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\lenders\models\Lendinvestment;
use app\models\Lender;
use app\modules\lenders\models\Lenderphone;
/**
 * LendinvestmentSearch represents the model behind the search form about `app\models\Lendinvestment`.
 */
class LendinvestmentSearch extends Lendinvestment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lendInvestID', 'lenderID', 'isDeleted', 'receiveBankID', 'seqNo', 'generatedRightSeqNo', 'isRightConfirmed', 'isRedeemed', 'billcount', 'investMonth', 'customerManagerID', 'teamManagerID', 'operateManagerID', 'yunYingManagerID', 'yunYingManagerTeamBuildNameID', 'subCompanyManagerID', 'VPID', 'subCompanyTeamBuildID', 'companyID', 'deptID', 'addressID', 'phoneID', 'sourceSuperMarketID', 'arrangeWork', 'workflowSeqNo', 'investDate', 'fenhongTimes'], 'integer'],
            [['lendInvestNo', 'lendType', 'applyInvestDate', 'expireDate', 'toinvestDate', 'recycleType', 'investStatus', 'paymentType', 'submitDate', 'toWithholdDate', 'createTime', 'createUser', 'updateTime', 'updateUser', 'RepaymentDay', 'comments', 'payBankID', 'contractNo', 'lenderNo', 'transferBankName', 'transferedUser', 'transferedDate', 'generatedRightDate', 'redeemDate', 'address', 'billDate', 'redeemType', 'querenshuTime', 'fangkuanBankName', 'fangkuanTime', 'firstDate', 'jieqingTime', 'redeemOverDate', 'customerManagerName', 'teamManagerName', 'operateManagerName', 'yunYingManagerName', 'yunYingManagerTeamBuildName', 'subCompanyManagerName', 'VPName', 'subCompanyTeamBuildName', 'qixiDate', 'nextfanxiDate', 'innerComments', 'companyName', 'deptName', 'renewContractComment', 'oralContractNo', 'renewContractNo', 'renewDate', 'jixiaoDate', 'postType', 'payBankAmtDtl', 'changeRightDate', 'shijiDaoZhangDate', 'investType', 'recycleDesc'], 'safe'],
            [['investAmt', 'surplusAmt', 'investRate', 'curIncomes', 'curIncomesRate', 'discountRate', 'fangkuanAmt', 'redeemAmt', 'lateReturn', 'paymentAmount'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lendinvestment::find();

        // add conditions that should always apply here
//        $query->where(['investRate'=>'12','investAmt'=>'5']); //添加查询条件
        if(isset($_GET['LendinvestmentSearch'])){
            if(!empty(Yii::$app->request->get('LendinvestmentSearch')['lenderID'])){
                $lenderModel = Lender::find()->where(['userName'=>Yii::$app->request->get('LendinvestmentSearch')['lenderID']])->one();
                $query->andFilterWhere(['lenderID'=>$lenderModel->lenderID]);
            }
            if(!empty(Yii::$app->request->get('LendinvestmentSearch')['phoneID'])){
                $phoneModel = Lenderphone::find()->where(['phone'=>Yii::$app->request->get('LendinvestmentSearch')['phoneID']])->one();
                $query->andFilterWhere(['phoneID'=>$phoneModel->phoneID]);
            }
        }
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 10], //设置每个页面显示几条数据
        ]);
        
        $this->load($params);
        
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lendInvestID' => $this->lendInvestID,
            'lenderID' => $this->lenderID,
            'applyInvestDate' => $this->applyInvestDate,
            'expireDate' => $this->expireDate,
            'investAmt' => $this->investAmt,
            'surplusAmt' => $this->surplusAmt,
            'toinvestDate' => $this->toinvestDate,
            'investRate' => $this->investRate,
            'submitDate' => $this->submitDate,
            'toWithholdDate' => $this->toWithholdDate,
            'isDeleted' => $this->isDeleted,
            'createTime' => $this->createTime,
            'updateTime' => $this->updateTime,
            'curIncomes' => $this->curIncomes,
            'curIncomesRate' => $this->curIncomesRate,
            'discountRate' => $this->discountRate,
            'receiveBankID' => $this->receiveBankID,
            'seqNo' => $this->seqNo,
            'transferedDate' => $this->transferedDate,
            'generatedRightSeqNo' => $this->generatedRightSeqNo,
            'generatedRightDate' => $this->generatedRightDate,
            'isRightConfirmed' => $this->isRightConfirmed,
            'isRedeemed' => $this->isRedeemed,
            'redeemDate' => $this->redeemDate,
            'querenshuTime' => $this->querenshuTime,
            'fangkuanTime' => $this->fangkuanTime,
            'fangkuanAmt' => $this->fangkuanAmt,
            'firstDate' => $this->firstDate,
            'billcount' => $this->billcount,
            'jieqingTime' => $this->jieqingTime,
            'redeemAmt' => $this->redeemAmt,
            'redeemOverDate' => $this->redeemOverDate,
            'investMonth' => $this->investMonth,
            'customerManagerID' => $this->customerManagerID,
            'teamManagerID' => $this->teamManagerID,
            'operateManagerID' => $this->operateManagerID,
            'yunYingManagerID' => $this->yunYingManagerID,
            'yunYingManagerTeamBuildNameID' => $this->yunYingManagerTeamBuildNameID,
            'subCompanyManagerID' => $this->subCompanyManagerID,
            'VPID' => $this->VPID,
            'subCompanyTeamBuildID' => $this->subCompanyTeamBuildID,
            'qixiDate' => $this->qixiDate,
            'nextfanxiDate' => $this->nextfanxiDate,
            'companyID' => $this->companyID,
            'deptID' => $this->deptID,
            'addressID' => $this->addressID,
//            'phoneID' => $this->phoneID,
            'renewDate' => $this->renewDate,
            'jixiaoDate' => $this->jixiaoDate,
            'sourceSuperMarketID' => $this->sourceSuperMarketID,
            'arrangeWork' => $this->arrangeWork,
            'workflowSeqNo' => $this->workflowSeqNo,
            'investDate' => $this->investDate,
            'lateReturn' => $this->lateReturn,
            'paymentAmount' => $this->paymentAmount,
            'changeRightDate' => $this->changeRightDate,
            'shijiDaoZhangDate' => $this->shijiDaoZhangDate,
            'fenhongTimes' => $this->fenhongTimes,
        ]);

        $query->andFilterWhere(['like', 'lendInvestNo', $this->lendInvestNo])
            ->andFilterWhere(['like', 'lendType', $this->lendType])
            ->andFilterWhere(['like', 'recycleType', $this->recycleType])
            ->andFilterWhere(['like', 'investStatus', $this->investStatus])
            ->andFilterWhere(['like', 'paymentType', $this->paymentType])
            ->andFilterWhere(['like', 'createUser', $this->createUser])
            ->andFilterWhere(['like', 'updateUser', $this->updateUser])
            ->andFilterWhere(['like', 'RepaymentDay', $this->RepaymentDay])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'payBankID', $this->payBankID])
            ->andFilterWhere(['like', 'contractNo', $this->contractNo])
            ->andFilterWhere(['like', 'lenderNo', $this->lenderNo])
            ->andFilterWhere(['like', 'transferBankName', $this->transferBankName])
            ->andFilterWhere(['like', 'transferedUser', $this->transferedUser])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'billDate', $this->billDate])
            ->andFilterWhere(['like', 'redeemType', $this->redeemType])
            ->andFilterWhere(['like', 'fangkuanBankName', $this->fangkuanBankName])
            ->andFilterWhere(['like', 'customerManagerName', $this->customerManagerName])
            ->andFilterWhere(['like', 'teamManagerName', $this->teamManagerName])
            ->andFilterWhere(['like', 'operateManagerName', $this->operateManagerName])
            ->andFilterWhere(['like', 'yunYingManagerName', $this->yunYingManagerName])
            ->andFilterWhere(['like', 'yunYingManagerTeamBuildName', $this->yunYingManagerTeamBuildName])
            ->andFilterWhere(['like', 'subCompanyManagerName', $this->subCompanyManagerName])
            ->andFilterWhere(['like', 'VPName', $this->VPName])
            ->andFilterWhere(['like', 'subCompanyTeamBuildName', $this->subCompanyTeamBuildName])
            ->andFilterWhere(['like', 'innerComments', $this->innerComments])
            ->andFilterWhere(['like', 'companyName', $this->companyName])
            ->andFilterWhere(['like', 'deptName', $this->deptName])
            ->andFilterWhere(['like', 'renewContractComment', $this->renewContractComment])
            ->andFilterWhere(['like', 'oralContractNo', $this->oralContractNo])
            ->andFilterWhere(['like', 'renewContractNo', $this->renewContractNo])
            ->andFilterWhere(['like', 'postType', $this->postType])
            ->andFilterWhere(['like', 'payBankAmtDtl', $this->payBankAmtDtl])
            ->andFilterWhere(['like', 'investType', $this->investType])
            ->andFilterWhere(['like', 'recycleDesc', $this->recycleDesc]);

        return $dataProvider;
    }
}
