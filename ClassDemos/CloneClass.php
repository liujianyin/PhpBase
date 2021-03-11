<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/18
 * Time: 15:02
 */

class CloneClass
{
    public $param_list=array();
    function __set($name, $value)
    {
        $this->param_list[$name]=$value;

        // TODO: Implement __set() method.
    }


}
$object=new CloneClass();
$object->q=2;
$clone_obj=clone $object;
var_dump($clone_obj);
echo "</BR>";
var_dump($object);
echo "</BR>";
var_dump($clone_obj->param_list);
//echo $object->q;