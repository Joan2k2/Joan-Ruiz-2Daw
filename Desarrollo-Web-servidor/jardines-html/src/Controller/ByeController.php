<?php
namespace app\Controller;

use app\Model\TimeModel;
use app\View\GenericView;

class ByeController{
    public function bye(){
        //$currentTime = getCurrentTime();
        $timeModel = new TimeModel();        
        $currentTime = $timeModel->getCurrentTime();
        $view = new GenericView();
        $view->genericView("Adios",$currentTime);
    }
}
