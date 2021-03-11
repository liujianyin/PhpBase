<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/17
 * Time: 11:22
 */

class ExtentClass
{
    var $name='dady';
    function echo_name(){
        echo $this->name;
    }

}
class SonClass extends ExtentClass {
    var $name="son";
}
 $son =new  SonClass();
echo $son->name;   //son
$son->echo_name();  //son