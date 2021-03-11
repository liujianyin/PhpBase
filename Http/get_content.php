<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/8/1
 * Time: 10:30
 */
// Create a stream
$data=array('user'=>'charlid','pwd'=>'w2ss42');
$data_url = http_build_query ($data);
$data_len=sizeof($data);
$opts  = array(
    'http' =>array(
        'method' => "POST" ,
        'header' =>"Host:localhost\r\nContent-Type: application/x-www-form-urlencoded\r\nContent-Length: $data_len\r\n",
        'content'=>$data_url
    )
);

$context  =  stream_context_create ( $opts );

// Open the file using the HTTP headers set above
//$file  =  file_get_contents ( 'http://localhost/liujy_php/http/HelloWorld.php' ,  false ,  $context );
$fp=fopen('http://localhost/liujy_php/http/HelloWorld.php',"r",false ,$context);
fclose($fp);
?>
