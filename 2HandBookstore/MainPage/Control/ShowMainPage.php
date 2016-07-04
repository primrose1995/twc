<?php

//require_once(dirname(__FILE__). "/../../Bus/model/DoBusSelect.php");
//require_once(dirname(__FILE__). "/../../Driver/model/DoDriverSelect.php");
//require_once(dirname(__FILE__). "/../../OrderBusVerify/model/DoOrderBusVerifySelect.php");

class ShowMainPage {

    private $busSelect = null;
    private $driverSelect = null;
    private $orderBusVerifySelect = null;

    public function actionPerformed(){
        $authorization = empty($_SESSION['login']) ? "" : $_SESSION['login'];    //接收登入的使用者名稱
            switch ($authorization){
                case 'admin':
                    //include_once (dirname(__FILE__) . "./html/AdminMain.html" );
                    header('Refresh:0; url=../EmployeeAccount/EmployeeAccountController.php?action=ShowEmployeeAccountSelectPage');
                    break;
                case 'customer':
                    //include_once (dirname(__FILE__) . "./html/CustomerMain.html" );
                    header('Refresh:0; url=../OrderBus/OrderBusController.php?action=ShowOrderBusInsertPage');
                    break;
            default:
                header('Refresh:0; url=../../2HandBookstore/MainPage/View/index.html');
        }

    }

    private function showRemindInfo(){
        $this->busSelect = new DoBusSelect();
        $this->dirverSelect = new DoDriverSelect();
        $this->orderBusVerifySelect = new DoOrderBusVerifySelect();
        $busVehicleRegistrationDataStmt = $this->NoticeBusVehicleRegistration();
        $busInsuranceValidStmt = $this->NoticeBusInsuranceValid();
        $dirverLicenseValidStmt = $this->NoticeDriverLicenseValid();
        $orderBusVerifyStmt = $this->NoticeOrderBusStatus();
        include_once (dirname(__FILE__) . "./html/EmployeeMain.html" );
    }

    private function NoticeBusVehicleRegistration(){
        $this->busSelect->clearCondition();
        $this->busSelect->clearConditionPara();
        $this->busSelect->setConditionDueSevenDayByBuVehicleRegistration();
        return $this->busSelect->actionPerformed();
    }
    private function NoticeBusInsuranceValid(){
        $this->busSelect->clearCondition();
        $this->busSelect->clearConditionPara();
        $this->busSelect->setConditionDueSevenDayByInsuranceValid();
        return $this->busSelect->actionPerformed();
    }
    private function NoticeDriverLicenseValid(){
        $this->dirverSelect->setConditionDueSevenDayByLicenseValid();
        return $this->dirverSelect->actionPerformed();

    }
    private function NoticeOrderBusStatus(){

        $this->orderBusVerifySelect->setOrderBusByStatus("待確認");
        return $this->orderBusVerifySelect->actionPerformed();

    }
}
?>



