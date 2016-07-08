<?php
/**
 * Created by PhpStorm.
 * User: Allen Hsu
 * Date: 2016/7/7
 * Time: 下午 04:29
 */
class ShowUploadBookPage
{
    public function actionPerformed()
    {
        $this->ShowUploadBookPage();
    }

    public function ShowUploadBookPage()
    {
        header("Refresh: 0; url=../../2HandBookstore/BookManagement/View/upload.html");
    }
    
}

?>