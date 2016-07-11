<?php

/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/11
 * Time: 上午 02:39
 */
class ShowWishPage
{
    public function actionPerformed()
    {
        $this->ShowWishPage();
    }

    public function ShowWishPage()
    {
        header("Refresh: 0; url=../../2HandBookstore/WishingPool/View/wish.html");
    }
}