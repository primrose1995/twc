<?php

/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/4
 * Time: 下午 09:22
 */
class ShowMemberAreaPage
{
    public function actionPerformed()
    {
        $this->ShowMemberAreaPage();
    }

    public function ShowMemberAreaPage()
    {
        header("Refresh: 0; url=../../2HandBookstore/Member/View/MemberCenter.html");
    }

}