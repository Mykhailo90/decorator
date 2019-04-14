<?php

namespace frontend\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function actionIndex() {
        $test = [
            'a1' => 1,
            'a2' => 2,
            'a3' => 3
        ];
        dd($test);
    }
}