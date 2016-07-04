<?php

include_once "../commonController.php";

class MainController  extends CommonController {
    
    private $action = null;

    function __construct() {
        parent::__construct();
        $this->action = $this->event->getAction();

    }

    public function controllerPerformed() {
        switch ($this->action) {
            case 'ShowMainPage':
                $this->includeAction("MainPage","ShowMainPage");
                $actionListener = new ShowMainPage();
                break;
            case 'ShowSignUpPage':
                $this->includeAction("AccountActivity","ShowSignUpPage");
                $actionListener = new ShowSignUpPage();
                break;
            case 'ShowLoginPage':
                $this->includeAction("AccountActivity","showLoginPage");
                $actionListener = new showLoginPage();
                break;
            case 'ShowMemberAreaPage':
                $this->includeAction("Member","showMemberAreaPage");
                $actionListener = new showMemberAreaPage();
                break;
        }

        $actionListener->actionPerformed();

    }

}

$MainController = new MainController();
$MainController->controllerPerformed();

?>