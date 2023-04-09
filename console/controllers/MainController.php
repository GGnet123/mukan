<?php

namespace console\controllers;

use common\models\User;
use yii\console\Controller;

class MainController extends Controller {
    public function actionCreateAdmin() {
        $user = new User();
        $user->setPassword('secret');

        $user->username = 'main';
        $user->generateAuthKey();
        $user->status = User::STATUS_ACTIVE;
        $user->is_admin = true;
        $res = $user->save();

        echo "Success: " . ($res ? 'true' : 'false') . PHP_EOL;
    }
}