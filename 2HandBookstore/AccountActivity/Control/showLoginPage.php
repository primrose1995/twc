<?php

/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/2
 * Time: 下午 01:52
 */
class showLoginPage
{
    public function actionPerformed()
    {
        $this->showLoginPage();
    }

    public function showLoginPage()
    {
        header("Refresh: 0; url=../../2HandBookstore/AccountActivity/View/login.html");
    }

}

?>