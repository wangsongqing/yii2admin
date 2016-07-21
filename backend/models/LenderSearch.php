<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lender;

/**
 * LenderSearch represents the model behind the search form about `app\models\Lender`.
 */
class LenderSearch extends Lender
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lenderID', 'isDeleted', 'customerManagerID', 'teamManagerID', 'operateManagerID', 'yunYingManagerID', 'subCompanyManagerID', 'subCompanyTeamBuildID', 'VPID', 'yunYingManagerTeamBuildID', 'sourceSuperMarketID', 'arrangeWork', 'ClaimAddress'], 'integer'],
            [['userName', 'englishName', 'IDType', 'custSeqNo', 'email', 'phone', 'birthday', 'tel', 'fax', 'webSite', 'province', 'city', 'county', 'billAddress', 'billPostCode', 'customerStatus', 'intention', 'accountStatus', 'accountDate', 'identityNo', 'education', 'gender', 'duty', 'companyName', 'customerMantainUser', 'customerAuth', 'comments', 'signContractDate', 'contractNo', 'createTime', 'createUser', 'updateTime', 'updateUser', 'owner', 'lenderFrom', 'paymentType', 'transferedUser', 'transferedDate', 'team', 'Source', 'signContractAddress', 'customerManagerName', 'teamManagerName', 'operateManagerName', 'yunYingManagerName', 'subCompanyManagerName', 'subCompanyTeamBuildName', 'VPName', 'yunYingManagerTeamBuildName', 'nickName', 'SignDate', 'PayDate', 'nationality'], 'safe'],
            [['Grade'], 'number'],
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
        $query = Lender::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => ['pageSize' => 5], //设置每个页面显示几条数据
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'lenderID' => $this->lenderID,
            'birthday' => $this->birthday,
            'accountDate' => $this->accountDate,
            'isDeleted' => $this->isDeleted,
            'signContractDate' => $this->signContractDate,
            'createTime' => $this->createTime,
            'updateTime' => $this->updateTime,
            'transferedDate' => $this->transferedDate,
            'Grade' => $this->Grade,
            'customerManagerID' => $this->customerManagerID,
            'teamManagerID' => $this->teamManagerID,
            'operateManagerID' => $this->operateManagerID,
            'yunYingManagerID' => $this->yunYingManagerID,
            'subCompanyManagerID' => $this->subCompanyManagerID,
            'subCompanyTeamBuildID' => $this->subCompanyTeamBuildID,
            'VPID' => $this->VPID,
            'yunYingManagerTeamBuildID' => $this->yunYingManagerTeamBuildID,
            'sourceSuperMarketID' => $this->sourceSuperMarketID,
            'arrangeWork' => $this->arrangeWork,
            'SignDate' => $this->SignDate,
            'ClaimAddress' => $this->ClaimAddress,
            'PayDate' => $this->PayDate,
        ]);

        $query->andFilterWhere(['like', 'userName', $this->userName])
            ->andFilterWhere(['like', 'englishName', $this->englishName])
            ->andFilterWhere(['like', 'IDType', $this->IDType])
            ->andFilterWhere(['like', 'custSeqNo', $this->custSeqNo])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'webSite', $this->webSite])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'county', $this->county])
            ->andFilterWhere(['like', 'billAddress', $this->billAddress])
            ->andFilterWhere(['like', 'billPostCode', $this->billPostCode])
            ->andFilterWhere(['like', 'customerStatus', $this->customerStatus])
            ->andFilterWhere(['like', 'intention', $this->intention])
            ->andFilterWhere(['like', 'accountStatus', $this->accountStatus])
            ->andFilterWhere(['like', 'identityNo', $this->identityNo])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'duty', $this->duty])
            ->andFilterWhere(['like', 'companyName', $this->companyName])
            ->andFilterWhere(['like', 'customerMantainUser', $this->customerMantainUser])
            ->andFilterWhere(['like', 'customerAuth', $this->customerAuth])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'contractNo', $this->contractNo])
            ->andFilterWhere(['like', 'createUser', $this->createUser])
            ->andFilterWhere(['like', 'updateUser', $this->updateUser])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'lenderFrom', $this->lenderFrom])
            ->andFilterWhere(['like', 'paymentType', $this->paymentType])
            ->andFilterWhere(['like', 'transferedUser', $this->transferedUser])
            ->andFilterWhere(['like', 'team', $this->team])
            ->andFilterWhere(['like', 'Source', $this->Source])
            ->andFilterWhere(['like', 'signContractAddress', $this->signContractAddress])
            ->andFilterWhere(['like', 'customerManagerName', $this->customerManagerName])
            ->andFilterWhere(['like', 'teamManagerName', $this->teamManagerName])
            ->andFilterWhere(['like', 'operateManagerName', $this->operateManagerName])
            ->andFilterWhere(['like', 'yunYingManagerName', $this->yunYingManagerName])
            ->andFilterWhere(['like', 'subCompanyManagerName', $this->subCompanyManagerName])
            ->andFilterWhere(['like', 'subCompanyTeamBuildName', $this->subCompanyTeamBuildName])
            ->andFilterWhere(['like', 'VPName', $this->VPName])
            ->andFilterWhere(['like', 'yunYingManagerTeamBuildName', $this->yunYingManagerTeamBuildName])
            ->andFilterWhere(['like', 'nickName', $this->nickName])
            ->andFilterWhere(['like', 'nationality', $this->nationality]);

        return $dataProvider;
    }
}
