<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/17
 * Time: 16:19
 */
class A{}
class B{}

class FactoryClass
{
    static function getOject($class_name){ //生产类的工厂，提供类名产生类对象
        $new_object=new $class_name;
        var_dump($new_object);
        echo "</br>";

    }

}
$factory_object=FactoryClass::getOject('A');
FactoryClass::getOject('B');