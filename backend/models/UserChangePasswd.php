<?php
namespace backend\models;

use common\models\AdminModel;
use Yii;
use yii\base\Model;

/**
 * Login form
 */
class UserChangePasswd extends Model
{
    public $newPasswdOne;
    public $newPasswdTwo;
    public $oldPasswd;
    public $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['newPasswdTwo','newPasswdOne','oldPasswd'],'required'],
            ['oldPasswd','validatePassword'],
            ['newPasswdOne','validatePasswordNew'],
            ['newPasswdOne','validatePasswordNewOldChange']
            // rememberMe must be a boolean value
        ];
    }
    
     public function attributeLabels(){
        return [
            'oldPasswd' => '旧密码',
            'newPasswdOne' => '新密码',
            'newPasswdTwo' => '新密码',
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        $user = $this->getUser();
        if (!$user || !$user->validatePassword($this->oldPasswd)) {
                $this->addError($attribute, '旧密码不正确');
        }
    }
    
    public function validatePasswordNew($attribute,$params){
        if($this->newPasswdOne != $this->newPasswdTwo){
            $this->addError($attribute, '两次密码不一致');
            return;
        }
    }
    
    public function validatePasswordNewOldChange($attribute, $params) {
        if($this->oldPasswd == $this->newPasswdOne){
             $this->addError($attribute, '新密码不能和旧密码一致');
            return;
        }
    }
    
    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = AdminModel::findByUsername(Yii::$app->user->identity->username);
        }

        return $this->_user;
    }

}
