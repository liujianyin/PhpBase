<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/16
 * Time: 15:19
 */

class StaticFunction
{
    var $name='liujy'; //实例属性
    static $count=1;  //静态属性
    function get_name(){  //实例方法
        echo $this->name;
        echo self::$count;//实例方法可以调用静态属性
          //this代表的是调用当前方法的对象
    }
   static function getStatic(){ //静态方法
//        echo $this->name();
        echo self::$count;
        //self代表调用当前的方法的类
       //静态方法中通常不可以调用静态属性

   }
}
$static_object=new StaticFunction();
$static_object->get_name();//对象调用实例方法
$static_object->getStatic(); //静态方法可以使用对象调用
StaticFunction::getStatic();  //类名调用静态方法
echo StaticFunction::$count;//类名调用静态变量
//echo $static_object->$count; //报错、静态变量只能用类名调用。静态方法类名和对象都可以调用

