<meta  charset='utf-8'>
<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/18
 * Time: 10:42
 */

class SetClass
{
 public $params_list=array();
    function __set($name,$value)
    {
        $this->params_list[$name]=$value;
        //trigger_error('该变量赋值');

    }
    function __get($name)
    {
        return $this->params_list[$name];
       // trigger_error('该变量未被定义');
    }
    function __call($method_name,$param_array){
//        var_dump($method_name);
//        var_dump($param_array);
         $total=0;
       foreach ($param_array as $key => $value){

           $total+=$value*$value;

       }
       return $total;

    }

}
$setClass=new SetClass();
echo $setClass->sum(1);
echo "</br>";
echo $setClass->sum(2,3);
//$setClass->b=9;
//var_dump($setClass->params_list);  //array(1) { ["b"]=> int(9) }