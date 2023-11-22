<?php
namespace app\Controller;
use app\Model\SayingModel;
use app\View\SayingView;

class SayingController{
    public function saying($n){
        $sayingModel = new SayingModel();
        $sayingN = $sayingModel->getSaying($n);
        $sayingView = new SayingView();
        $sayingView->sayingView($sayingN);
    }
}
