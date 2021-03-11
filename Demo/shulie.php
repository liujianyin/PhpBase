<meta charset="utf-8">
<?php
  
  function shulie($n){
  	if($n==1||$n==2){
  		return 1;
  	}
  	// echo"请求".$n."数据</br>";
  	$out=shulie($n-1)+shulie($n-2);
  	// echo"结果".$out."</br>";
  	return $out;
  }
  echo shulie(20);
  echo "</br>";


$var1=1;
$var2=1;

for ($i=0; $i <18 ; $i++) { 
     $out=$var1+$var2;
       $var1=$var2;
     $var2=$out;
         echo $out;
     echo "</br>";
   

	# code...
}
$conn = array('1' =>1 ,'2'=>2 );
var_dump($conn);
echo "</br>";



$yx_array=array(1,2,333,4);
// foreach ($yx_array as $key => $value) {
	$tmp=$yx_array[0];
	$yx_array[0]=$yx_array[3];
	$yx_array[3]=$tmp;
	# code...
// }s
var_dump($yx_array);
echo "</br>";



$array1=array('1'=>123,'abc'=>234,'hk'=>213);
for($i=0;$i<count($array1);++$i){
	$key=key($array1);
	$value=current($array1);
	echo $key."=>".$value;
	next($array1);
}
while (list($key,$value)=each($array1)) {
	
	# code...
}


?>	