<?php

include_once ("

../../ConnectDB.php");

class DoCheckAccount extends ConnectDB{

    private $event = null;
    private $pdo = null;
    private $condition = null;
    private $conditionPara = array();

    function __construct($event){
        parent::__construct();
        $this->pdo = $this->getPDO();
        $this->event = $event;
    }

    public function actionPerformed(){
        $get = $this->event->getGet();
        $user = $get['user'];
        $passwd = $get['pass'];


        $this->chkExistCustomerAccount($user,$passwd);	// 先確認是否為顧客帳號
        $this->chkExistEmployeeAccount($user,$passwd);	// 再確認是否為員工帳號
        $this->chkExistAdminAccount($user,$passwd);		// 最後確認是否為 admin 帳號

    }

    private function chkExistCustomerAccount($account,$passwd){
        $sql = "Select UA_Account,UA_Passwd ,Cu_Name , CA_ID , cu.Cu_ID as Cu_ID
				From customer cu , customerAccount ca  ,userAccount ua
				Where UA_Account = ? And UA_Passwd = ? And ua.UA_ID = ca.UA_ID And ca.Cu_ID = cu.Cu_ID ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($account,$passwd));
        $resData = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resData){

            $_SESSION['login']="customer";
            $_SESSION['loginUserID'] = $resData['Cu_ID'];
            $_SESSION['loginCustomerAccountID'] = $resData['CA_ID'];
            $_SESSION['loginUserName'] = $resData['Cu_Name'];
            echo "successful";
            exit;
        }
    }

    private function chkExistEmployeeAccount($account,$passwd){
        $sql = "Select UA_Account,UA_Passwd,Em_Name , EA_ID , em.Em_ID as Em_ID
				From employee em , employeeAccount ea , userAccount ua
				Where UA_Account = ? And UA_Passwd = ? And ua.UA_ID = ea.UA_ID And ea.Em_ID = em.Em_ID ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($account,$passwd));
        $resData = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resData){
            $_SESSION['login']="employee";
            $_SESSION['loginUserID'] = $resData['Em_ID'];
            $_SESSION['loginEmployeeAccountID'] = $resData['EA_ID'];
            $_SESSION['loginUserName'] = $resData['Em_Name'];
            echo "successful";
            exit;
        }
    }

    private function chkExistAdminAccount($account,$passwd){

        if($account == "admin" && $passwd == "admin"){
            $_SESSION['login']="admin";
            $_SESSION['loginUserName']= "管理員";
            echo "successful";
            exit;
        }else{
            echo "failed";
        }
    }
}

?>


class DoCheckAccount extends ConnectDB{

    private $event = null;
    private $pdo = null;
    private $condition = null;
    private $conditionPara = array();

    function __construct($event){
        parent::__construct();
        $this->pdo = $this->getPDO();
        $this->event = $event;
    }

    public function actionPerformed(){
        $get = $this->event->getGet();
        $user = $get['user'];
        $passwd = $get['pass'];


        $this->chkExistCustomerAccount($user,$passwd);	// 先確認是否為顧客帳號
        $this->chkExistEmployeeAccount($user,$passwd);	// 再確認是否為員工帳號
        $this->chkExistAdminAccount($user,$passwd);		// 最後確認是否為 admin 帳號

    }

    private function chkExistCustomerAccount($account,$passwd){
        $sql = "Select UA_Account,UA_Passwd ,Cu_Name , CA_ID , cu.Cu_ID as Cu_ID
				From customer cu , customerAccount ca  ,userAccount ua
				Where UA_Account = ? And UA_Passwd = ? And ua.UA_ID = ca.UA_ID And ca.Cu_ID = cu.Cu_ID ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($account,$passwd));
        $resData = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resData){

            $_SESSION['login']="customer";
            $_SESSION['loginUserID'] = $resData['Cu_ID'];
            $_SESSION['loginCustomerAccountID'] = $resData['CA_ID'];
            $_SESSION['loginUserName'] = $resData['Cu_Name'];
            echo "successful";
            exit;
        }
    }

    private function chkExistEmployeeAccount($account,$passwd){
        $sql = "Select UA_Account,UA_Passwd,Em_Name , EA_ID , em.Em_ID as Em_ID
				From employee em , employeeAccount ea , userAccount ua
				Where UA_Account = ? And UA_Passwd = ? And ua.UA_ID = ea.UA_ID And ea.Em_ID = em.Em_ID ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($account,$passwd));
        $resData = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resData){
            $_SESSION['login']="employee";
            $_SESSION['loginUserID'] = $resData['Em_ID'];
            $_SESSION['loginEmployeeAccountID'] = $resData['EA_ID'];
            $_SESSION['loginUserName'] = $resData['Em_Name'];
            echo "successful";
            exit;
        }
    }

    private function chkExistAdminAccount($account,$passwd){

        if($account == "admin" && $passwd == "admin"){
            $_SESSION['login']="admin";
            $_SESSION['loginUserName']= "管理員";
            echo "successful";
            exit;
        }else{
            echo "failed";
        }
    }
}

?>
