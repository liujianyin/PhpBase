<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/16
 * Time: 14:43
 */

define('G',9.8);//定义普通常量
class ConstClass
{
    //define('PI',3.14);//类常量不可以使用define定义
    const PI=3.14; //类常量的作用域特别广

}
echo ConstClass::PI;  //调用方式直接使用类::常量名
//echo constant('PI'); //报错，类常量只能用类调用
echo G;
echo constant('G');