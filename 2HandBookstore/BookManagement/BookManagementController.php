<?php 
include_once "../commonController.php";
/**
 * Created by PhpStorm.
 * User: Allen Hsu
 * Date: 2016/7/7
 * Time: 下午 03:56
 */
class BookManagementController  extends commonController
{
    private $action = null;

    function __construct()
    {
        parent::__construct();
        $this->action = $this->event->getAction();

    }

    public function controllerPerformed() {
        switch ($this->action) {
            case 'ShowProfilePage':
                $this->includeAction("BookManagement","ShowProfilePage");
                $actionListener = new ShowPage();
                break;
            case 'connectProfile':
                $this->includeDB("Member","connectProfile");
                $actionListener = new connectProfile($this->event);
                break;
        }

        $actionListener->actionPerformed();

    }
}

?>