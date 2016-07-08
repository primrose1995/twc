<?php

/**
 * Created by PhpStorm.
 * User: Ma
 * Date: 2016/7/6
 * Time: 上午 11:17
 */
class showChatroomPage
{
    public function actionPerformed()
    {
        $this->showChatroomPage();
    }

    public function showChatroomPage()
    {
        header("Refresh: 0; url=../../2HandBookstore/Chatroom/View/index.html");
    }
}