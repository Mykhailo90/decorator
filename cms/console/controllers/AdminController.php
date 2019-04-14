<?php

namespace console\controllers;

use common\models\User;
use yii\console\Controller;

class AdminController extends Controller
{
    public $userName;
    public $password;
    public $key;
    public $email;

    public function options($actionID)
    {
        return ['userName', 'password', 'key', 'email'];
    }

    public function optionAliases()
    {
        return [
            'u' => 'userName',
            'p' => 'password',
            'k' => 'key',
            'e' => 'email'
        ];
    }

    public function actionCreate()
    {
        $mainKey = 'ssarapii';

        if ($this->key != $mainKey) {
            die('Error! Wrong access!' . "\n");
        }
        if ($this->userName && $this->email && $this->password && $this->key === $mainKey) {

            $model = User::find()->where(['username' => $this->userName])->one();
            if (empty($model)) {
                $user = new User();
                $user->username = $this->userName;
                $user->email = $this->email;
                $user->setPassword($this->password);
                $user->generateAuthKey();
                if ($user->save()) {
                    echo "Success! User was successfully added\n";
                    return;
                }
                die('Unknown error. Problem with save function');
            }
            die('Error! This user name already exists');

        }
        die('Error! You have to input username, email, password and key!' . "\n");
    }
}