<?php
namespace app\View;

class GenericView
{
    public function genericView($greetings, $currentTime)
    {
        echo "$greetings $currentTime";
    }
}
