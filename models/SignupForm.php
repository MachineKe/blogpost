<?php

namespace app\models;

use yii\helpers\VarDumper;

class SignupForm extends \yii\base\Model
{
    public $username;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['username', 'password', 'password_repeat'], 'required'],
            [['username', 'password','password_repeat'], 'string', 'min' => 4, 'max' => 16],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
        ];
    }

    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->password = \Yii::$app->security->generatePasswordHash($this->password);
            $user->auth_key = \Yii::$app->security->generateRandomString();
            $user->access_token = \Yii::$app->security->generateRandomString();
            if ($user->save()) {
                return $user;
            }
        }
        return null;
    }
}
