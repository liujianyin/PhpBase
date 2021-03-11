<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/18
 * Time: 14:22
 */

function __autoload($name){
    require_once $name.'.php';

}
//require 'StaticFunction.php';
$person=new StaticFunction();
$person->get_name();