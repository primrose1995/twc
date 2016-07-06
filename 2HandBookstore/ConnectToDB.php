<?php

/**
 * Created by PhpStorm.
 * User: HanLing Shen
 * Date: 2016/7/4
 * Time: 下午 05:33
 */
error_reporting(0);
define('DB_NAME','secondhandbookstore');
define('DB_USER','2hand');
define('DB_PASSWORD','miranda226');
define('DB_HOST','localhost');
define('DB_TYPE','mysql');

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
class ConnectToDB
{
    
    private $pdo = null;
    function __construct()
    {
        $this->pdo = new PDO(DB_HOST,DB_NAME, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    protected function getPDO(){
        return $this->pdo;
    }

}