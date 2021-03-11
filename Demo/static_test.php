<?php



$param1=function(){
	static $param=10;
     // $param=10;
	return $param++;
};
echo $param1();
echo $param1();
echo $param1();
echo $param1();
?>