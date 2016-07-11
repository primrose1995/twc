<?php

include_once "../commonController.php";

class MainController  extends commonController{
    
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
                $this->includeAction("AccountActivity","ShowLoginPage");
                $actionListener = new ShowLoginPage();
                break;
            case 'ShowMemberAreaPage':
                $this->includeAction("Member","ShowMemberAreaPage");
                $actionListener = new ShowMemberAreaPage();
                break;
            case 'ShowChatroomPage':
                $this->includeAction("Chatroom","showChatroomPage");
                $actionListener = new showChatroomPage();
                break;
            case 'ShowPoolPage':
                $this->includeAction("WishingPool","ShowPoolPage");
                $actionListener = new ShowPoolPage();
                break;
            case 'ShowUploadBookPage':
                $this->includeAction("BookManagement","ShowUploadBookPage");
                $actionListener = new ShowUploadBookPage();
                break;
            case 'connectLogout':
                $this->includeDB("AccountActivity","connectLogout");
                $actionListener = new connectLogout();
                break;
            
        }

        $actionListener->actionPerformed();

    }

}

$MainController = new MainController();
$MainController->controllerPerformed();

?>