<?php

include "../commonController.php";

/**
 * Created by PhpStorm.
 * User: Ma
 * Date: 2016/7/8
 * Time: 下午 09:02
 */
class BookController extends commonController
{

    private $action = null;

    function __construct()
    {
        parent::__construct();
        $this->action = $this->event->getAction();
    }

    public function controllerPerformed()
    {
        switch ($this->action)
        {
            case 'ShowBookPage':
                $this->includeAction("BookManagement", "ShowBookPage");
                $actionListener = new ShowBookPage();
                break;
            case 'ShowBookInfoPage':
                $this->includeAction("BookManagement", "ShowBookInfoPage");
                $actionListener = new ShowBookInfoPage();
                break;
        


        }
        $actionListener->actionPerformed();
    }
}

$BookController = new BookController();
$BookController->controllerPerformed();
?>