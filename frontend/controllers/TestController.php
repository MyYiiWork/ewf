<?php
namespace frontend\controllers;
class TestController extends \yii\web\Controller{
    public function actionIndex(){
        echo $this->render('index');
    }
    
    public function actionTest(){
        echo 'test';
        $component = new \yii\base\Component();
        $eventName = "event";
        $handler = "handler";
        $event = new \yii\base\Event();
        $component->trigger($eventName,$event);
        $component->on($eventName, $handler);
        $component->off($eventName, $handler);
    }
}

