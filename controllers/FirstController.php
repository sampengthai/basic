<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionPage1(){
        return $this->render('page1');
    }
    
    public function actionPage2(){
        $hello = "Preechapol Puksrisuk";
        $a = 5;
        $b = 3;
        return $this->render('page2',[
            'hello'=>$hello,
            'x'=>$a,
            'a'=>$a,
            'b'=>$b,
            'c'=>$a+$b
                ]);  //ให้ controller ส่งค่าตัวแปร hello
        //array() = [] 
    }
    
    public function actionPage3(){
        return $this->render('page3');
    }

}
