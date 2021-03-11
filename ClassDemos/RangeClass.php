<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/17
 * Time: 14:23
 */

class RangeClass
{
    public $name='liujy';
    protected $sex='female';
    private   $age=20;
    protected static $count;
    const PI=3.14;
    function showProtcted(){  //通过类内部调用私有或者保护成员可以访问
        echo $this->sex;
        echo $this->age;
        echo self::$count;
        echo self::PI;
    }

}
$rangeObject=new RangeClass();
echo $rangeObject->name;
//echo $rangeObject->sex;  //报错
//echo $rangeObject->age;   //报错
//echo RangeClass::$count;  //类访问静态变量 报错
echo RangeClass::PI;
$rangeObject->showProtcted();//female203.14
echo "</br>";

class TestRange extends RangeClass{
    function echoInner(){
        echo  $this->sex;
        echo $this->name;
//        echo parent::
//        echo $this->age;//报错，这是子类内部不可以访问父类私有成员
    }
}
$test_range=new TestRange();
$test_range->echoInner();
