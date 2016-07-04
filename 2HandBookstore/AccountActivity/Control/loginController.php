<?php
include "../commonController.php";
/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/2
 * Time: 下午 01:24
 */
class loginController extends commonController
{
    private $action = null;
    
    function __construct($module, $file)
    {
        parent::__construct($module, $file);
        $this->action = $this->event->getAction();
    }
    public function controllerPerformed()
    {
        switch($this->action){
            case '';
        }
    }
}