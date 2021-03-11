<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/12
 * Time: 16:38
 */

class Person
{
//    define('PI',3.14); //类常量不可以使用这个方法定义
    const PI=3.14;

    var $name=1;
}
$classs_name='Person';
$person_object=new $classs_name();
$person_object_demo=$person_object;
$person_object->name='liujy';
echo $person_object_demo->name; //liujy

$classs_name='Person';
$person_object1=new $classs_name();
$person_object_demo1=&$person_object1;
$person_object1->name='liujy';
echo $person_object_demo1->name;  //liujy
echo constant('PI');

