<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/8/27
 * Time: 17:52
 */
$str = "LAMP";
$str1 ="LAMPBrother";
$strc = strcmp($str,$str1);
echo $strc;
switch ($strc){
    case 1:
        echo"str > str1";
        break;
    case –1:
        echo"str < str1";
        break;
    case 0:
        echo"str=str1";
        break;
    default:
        echo'str <> str1';
}