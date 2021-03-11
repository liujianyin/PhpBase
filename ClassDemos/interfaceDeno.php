<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/18
 * Time: 12:01
 */
interface  A{
    const PI=3.14;
    function way1(); //默认是public的抽象方法
    function way2($param,$param1); //具有形参的抽象方法
}