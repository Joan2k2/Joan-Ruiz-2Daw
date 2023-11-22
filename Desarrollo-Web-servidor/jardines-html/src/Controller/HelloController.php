<?php
namespace app\Controller;

use app\Model\TimeModel;
use app\View\GenericView;

class HelloController
{
    public function hello()
    {
        //require_once "../Model/TimeModel.php";
        //require_once "../View/GenericView.php";
        $timeModel = new TimeModel();        
        $currentTime = $timeModel->getCurrentTime();
        $view = new GenericView();
        $view->genericView("Hola", $currentTime);
    }
}
