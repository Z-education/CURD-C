<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BrandController extends Controller {

    public $layout = false;

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionCreate() {
        return $this->render('create');
    }

    public function actionCreate1() {
        return $this->render('create1');
    }

}