<?php

/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/6
 * Time: 下午 03:07
 */
class connectLogout
{
    public function actionPerformed()
    {
        unset($_SESSION['username']);
        ?>
        <script language="javascript">
            alert("已登出!");
        </script>
        <?php
        header("Refresh: 0; url=../MainPage/MainPageController.php?action=ShowMainPage");
    }
    
}