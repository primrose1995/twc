<?php
include_once "../commonController.php";
/**
 * Created by PhpStorm.
 * User: Ma
 * Date: 2016/7/5
 * Time: 下午 01:42
 */
class MemberController extends commonController
{
    private $action = null;

    function __construct() {
        parent::__construct();
        $this->action = $this->event->getAction();

    }

    public function controllerPerformed() {
        switch ($this->action) {
            case 'ShowProfilePage':
                $this->includeAction("Member","ShowProfilePage");
                $actionListener = new ShowPage();
                break;
            case 'connectProfile':
                $this->includeDB("Member","connectProfile");
                $actionListener = new connectProfile($this->event);
                break;
            case 'connectProfileModified':
                $this->includeDB("Member","connectProfileModified");
                $actionListener = new connectProfileModified($this->event);
                break;
        }

        $actionListener->actionPerformed();

    }

}

$MemberController = new MemberController();
$MemberController->controllerPerformed();
?>

