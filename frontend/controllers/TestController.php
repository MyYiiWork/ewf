<?php
namespace frontend\controllers;
class TestController extends \yii\web\Controller{
    public function actionIndex(){
        echo $this->render('index');
    }
    
    public function actionTest(){
        echo $this->render("test");
    }
    
    public function actionTest1(){
//        file_put_contents('/tmp/testfile', "test");
    }
}

