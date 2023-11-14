<?php
namespace App\Core\Interfaces;
error_reporting(E_ALL);
ini_set("display_errors",1);
interface IDataBase{
    public function executeSQL($sql);
}