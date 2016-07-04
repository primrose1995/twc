<?php

/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/2
 * Time: 下午 12:42
 */
class event
{
    private $get = null;
    private $post = null;
    private $parameter = null;
    
    function __construct($get,$post)
    {
        $this->get = $get;
        $this->post = $post;
    }
    
    public function getGet()
    {
        return $this->get;
    }

    public function getPost()
    {
        return $this->post;
    }
    
    public function getAction()
    {
        $action = $this->get;
        return $action['action'];
    }
    
    public function getPostParameter($key)
    {
    return $this->post[$key];
    }
    
    public function  setPostParameter($key,$keyvalue)
    {
        $this->post[$key]=$keyvalue;
    }
}

?>