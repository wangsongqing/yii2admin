<?php

namespace app\modules\redistest\models;

use Yii;

class Customer extends \yii\redis\ActiveRecord
{
    /**
     * @return array the list of attributes for this record
     */
    public function attributes()
    {
        return ['id', 'name', 'address', 'registration_date'];
    }


    public function attributeLabels()
    {
        return [
           'id' => '用户ID',
           'name' => '用户名',
           'address' => '用户地址',
        ];
    }

    /**
     * @return ActiveQuery defines a relation to the Order record (can be in other database, e.g. elasticsearch or sql)
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['customer_id' => 'id']);
    }

    /**
     * Defines a scope that modifies the `$query` to return only active(status = 1) customers
     */
    public static function active($query)
    {
        $query->andWhere(['status' => 1]);
    }
}