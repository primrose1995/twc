<?php

include_once ("../../ConnectToDB.php");

class connectAccount extends ConnectToDB{

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
        $post = $this->event->getPost();
        $user = $post['user'];
        $passwd = $post['password'];


        $this->checkCustomerAccount($user,$passwd);	// 先確認是否為顧客帳號
        //$this->checkAdminAccount($user,$passwd);		// 最後確認是否為 admin 帳號

    }

    private function checkCustomerAccount($account,$passwd){
        $sql = "Select account,password
				From buyer
				Where account = $account;";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($account,$passwd));
        $resData = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resData){

            $_SESSION['login']="customer";
            $_SESSION['loginUserID'] = $resData['id_buyer'];
            $_SESSION['loginAccount'] = $resData['account'];
            $_SESSION['loginUserName'] = $resData['name'];
            ?><script language="JavaScript">
            alert("登入成功");
            </script><?php
            exit;
        }else{
            ?><script language="JavaScript">
                alert("登入失敗");
            </script><?php
            exit;
        }
    }

    private function checkAdminAccount($account,$passwd){

        if($account == "admin" && $passwd == "admin"){
            $_SESSION['login']="admin";
            $_SESSION['loginUserName']= "管理員";
            echo "successful";
            exit;
        }else{
            echo "failed";
        }
    }
    
    private function chckCustomerAccount($account,$passwd){
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


    private function chekAdminAccount($account,$passwd){

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

