<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/8/1
 * Time: 11:19
 */
$postData = array(
    'title'=>'我是socket方式提交的',
    'content'=>'我是socket的内容'
);
$postData = http_build_query($postData);
$fp = fsockopen('localhost',80,$errno,$errorStr,5);
$request = "POST http://localhost/liujy_php/http/HelloWorld.php HTTP/1.1"."\r\n";
$request .="Host:localhost\r\n";
$request .="Content-type:application/x-www-form-urlencoded\r\n";
$request .="Content-length:".strlen($postData)."\r\n\r\n";
$request .= $postData;
//var_dump($request);
fwrite($fp,$request);

//读取数据
while(!feof($fp)){
    echo fgets($fp,1024);
}
