<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/17
 * Time: 16:37
 */

class SingleClass
{
    private function __construct()
    {
    }
    static  function getObject(){
        static $count=0;
        if($count==0){
            $new_object=new self();
            $count++;
            return $new_object;

        }else{
            return;
        }
    }

}

    var_dump(SingleClass::getObject());
echo "</br>";
var_dump(SingleClass::getObject());