<?php

/**
 * Created by PhpStorm.
 * User: Ma
 * Date: 2016/7/8
 * Time: 下午 09:05
 */
class ShowBookPage
{
    public function actionPerformed()
    {
        $this->ShowBookPage();
    }

    public function ShowBookPage()
    {
        header("Refresh: 0; url=../../2HandBookstore/BookManagement/View/book.html");
    }

}

?>