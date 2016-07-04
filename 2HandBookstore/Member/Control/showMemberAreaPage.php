<?php

/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/4
 * Time: 下午 09:22
 */
class showMemberAreaPage
{
    public function actionPerformed()
    {
        $this->showMemberAreaPage();
    }

    public function showMemberAreaPage()
    {
        header("Refresh: 0; url=../../2HandBookstore/Member/View/memberArea.html");
    }

}