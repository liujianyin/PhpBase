<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/16
 * Time: 15:06
 */

class StaticClass
{
    const PI=3.14;
    var $name;
    static $count; //定义静态变量，是属于类、所有对象共有
}

$staticClass1=new StaticClass();
$staticClass1->name='liujy';
StaticClass::$count++;

$staticClass2=new StaticClass();
$staticClass2->name='hk';//使用普通变量
StaticClass::$count++;

echo StaticClass::$count; //获取静态变量值
echo StaticClass::PI;//获取常量值