<meta charset="utf-8">
<?php

echo "hello world!";
echo "</br>";
echo "当年时间".date('Y-m-d H:i:s');
$var1=false;
isset($var1);  //true
$var2=null;
isset($var2);//false
$var3='';
isset($var3); //true


$var4=0;
isset($var4);//true
unset($var4);
isset($var4);//false
$var5=1;
$var6=$var5;
unset($var5);
isset($var6);//true;


// isset($var5); //false
if(isset($var6)){
	echo "name变量存在";
}else{
	echo "name变量不存在";
}
$name='liujy';
$father_name=$name;
$name="another";
unset($name);
var_dump(isset($father_name)); //true
echo $father_name;   //liujy

$var7=1;
$var8=&$var7;
$var7=10;
echo $var8;  //10
unset($var7);
var_dump(isset($var8));  //true



echo "</br>可变变量的demo举例</br>";
$number_1=10;
$number_2=20;
$number_3=10;
$number_4=20;
$number_5=10;
$number_6=20;
$total=0;
for ($i=1; $i <7 ; $i++) { 
	$number="number_".$i;
	$total += $$number;
	# code...
}
echo $total;

echo "</br>";
// print_r($_SERVER);
// foreach ($_SERVER as $key => $value) {
// 	echo $key."=>".$value;
// 	echo "</br>";
// 	# code...
// }
var_dump($GLOBALS);
foreach($GLOBALS as $key=>$value){
	echo $key."=>".$value;
	echo "</BR>";
}
define("PI",3.14);
const C1=11;
$inst_name="C";
echo constant($inst_name."1");  //11
echo PI*3*3;  //28.26
echo C1;  //11
echo constant("C1"); //11
echo constant("PI");  //3.14

if(!defined("G"))
{
	echo "如果常量不存在，进行重新定义";
	define("G",9.8);
}
echo constant("G")*10;

echo __FILE__;   //E:\phpStudy\WWW\liujy_php\helloWorld.php
echo __DIR__;    //E:\phpStudy\WWW\liujy_php
echo  __LINE__;  //92

$num=6.3;
if($num/3==2.1){
	echo "算法".$num."成功";
}else{
	echo "算数不成功";
}
//结果是“算数不成功”





$before_num1=1;
$before_num2=1;
$before_num1++;
++$before_num2;
echo $before_num1; //2
echo "</br>";
echo $before_num2; //2
echo "</br>";
$after_num1=$before_num1++;
$after_num2=++$before_num2;
echo $after_num1; //2
echo "</br>";
echo $after_num2; //3
echo "</br>";
echo $before_num1;//3
echo "</br>";
echo $before_num2;//3


echo "</br>";
$t1=microtime(true);
for($i=0;$i<100000;$i++){

}
$t2=microtime(true);
for($i=0;$i<100000;++$i){

}
$t3=microtime(true);
echo $t2-$t1;
echo "</br>";
echo $t3-$t2;


echo "</br>数组连接运算符";
$array1= array('name' =>'liujy' ,'age'=>25 );
$array2 = array('color' =>'white' ,'height'=>160 );
var_dump($array1+$array2);   //array(4) { ["name"]=> string(5) "liujy" ["age"]=> int(25) ["color"]=> string(5) "white" ["height"]=> int(160) } 
$array3=array('name'=>'annabelle','weight'=>50);
echo "</br>";
var_dump($array1+$array3);  //array(3) { ["name"]=> string(5) "liujy" ["age"]=> int(25) ["weight"]=> int(50) } 





$month=1;
switch ($month) {
	case '1':
      echo 31;
	case '3':
	case '5':
	echo 31;
	
	
	default:
	echo 31;
		# code...
		break;
}
//结果是313131


echo "</BR>";

echo microtime(true);
echo "</BR>输出九九乘法表</br>";


for ($i=1; $i <9; ++$i) {
	// echo $i;
    for ($j=1; $j <$i+1 ; $j++) {
    	    	echo $i."*".$j."=".$i*$j;
    	echo "&nbsp;&nbsp;&nbsp;";

    	// if($j==1){
    	//  	continue;	
    	}
   
    	// echo "$i*$j=".$i*$j;

    	// sleep(10);
    	// echo "$i";
    	
  echo "</br>";

     	# code...
     } 
     // sleep(4);
     echo microtime(true);

     include '../include.php';
   
	# code...
	 // 获取文件的当前路径 + 文件名
     echo __FILE__;
     echo '<BR>';
     // 获取文件的当前路径
    echo dirname(__FILE__);
    echo '<BR>';
    // 获取文件的上一级目录路径
    echo dirname(dirname(__FILE__)); 
	echo  $_SERVER['DOCUMENT_ROOT'];
	echo dirname(dirname(__FILE__));
	include dirname(dirname(__FILE__))."\include.php";

var_dump(E_ERROR);


$height=1000;
if($height>180){
	trigger_error('身高过高',E_USER_WARNING);
}
echo($height);	

// set_error_handler("handler_errors");
// function handler_errors($error_code,$error_msg,$error_file,$error_line)
// {
// 	 echo "</br>";
//    echo $error_code;
//    echo "</br>";
//    echo $error_msg;
//    echo "</br>";
//    echo $error_file;
//    echo "</br>";
//    echo $error_line;
//    echo "</br>";
// }
// echo $eoor;   
//8
//Undefined variable: eoor
//E:\phpStudy\WWW\liujy_php\demo\helloWorld.php
//234
//
$size=file_get_contents("http://212.64.35.107/contents_000000/asset/cpk/Android/DramaData000_002.cpk");
echo strlen($size);


function getTotla($a=10,$b=20){
	return $a+$b;
}
echo getTotla();   //30


function relation_set($num1,&$num2)
{
           $num1=$num1+10;
           $num2=$num2+20;
           return $num1+$num2;
}
$num3=10;
$num4=10;
echo relation_set($num3,$num4);
echo 'num3='.$num3."</br>";  //10
echo 'num4='.$num4."</br>";   //30
// echo 'num2='.$num2."</br>";   //30

function test_get_arr(){
	$params_arr=func_get_args();  //获取所有发传过来的参数
	$params_arr_num=func_num_args();
	echo 'num='.$params_arr_num;
	$params_arr_value1=func_get_arg(0);
	echo  'vale1='.$params_arr_value1;
	foreach ($params_arr as $key => $value) {
		echo  $value."&nbsp;";		# code...
	}

}
test_get_arr(1,1,1,1,1,3,4,5,5);   // num=9vale1=11 1 1 1 1 3 4 5 5  1 1 1 1 1  3 4  5 5



     function f1(){

     	echo "调用了函数";

           //函数体
               }
          $function_name="f1";
          $function_name();


echo "</br>";

          $no_name=function(){
          	echo "匿名函数内容";
          };			
          $no_name();


          function getNum($a,$b,$c){
          	$d=$a+$b;
          	$e=$a-$b;
          return $c($d,$e);
          }
        $result=getNum(1,8,function($e,$f){
          	return $e*$f;
          });  
         echo $result; //-63

          $outside_param=1;
         function range_use($param1,$param2){
         	$param3=$param1+$param2;
         	echo '外部变量'.$outside_param;

         }
         range_use(1,2);
         echo "内部变量".$param3."</BR>";

         //Notice: Undefined variable: outside_param in E:\phpStudy\WWW\liujy_php\demo\helloWorld.php on line 309
		//外部变量
		//Notice: Undefined variable: param3 in E:\phpStudy\WWW\liujy_php\demo\helloWorld.php on line 313
		//内部变量


function test_static(){
	static $count=10;
	$count_param=10;
	$count++;
	$count_param++;
	echo $count;
	echo "&nbsp;";
	echo $count_param;
		echo "</br>";

}
test_static();
test_static();
test_static();



?>