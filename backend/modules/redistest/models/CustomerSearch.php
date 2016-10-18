<?php

namespace app\modules\redistest\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\redistest\models\Customer;

/**
 * LendinvestmentSearch represents the model behind the search form about `app\models\Lendinvestment`.
 */
class CustomerSearch extends Customer
{
   

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
        $query = Customer::find();

        // add conditions that should always apply here
//        $query->where(['investRate'=>'12','investAmt'=>'5']); //添加查询条件
        
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
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
