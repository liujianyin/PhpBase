
<meta charset="utf-8">
<?php


// $maopao_arr=array(9,3,2,5,8,7);

// for($i=0;$i<sizeof($maopao_arr)-1;$i++){
// 	for($j=0;$j<sizeof($maopao_arr)-1-$i;$j++){
// 		if($maopao_arr[$j]>$maopao_arr[$j+1]){
// 		$temp=$maopao_arr[$j];
// 		$maopao_arr[$j]=$maopao_arr[$j+1];
// 		$maopao_arr[$j+1]=$temp;
//              }
// 	}
	
//        }
        // print_r($maopao_arr);
	// echo "</br>";


// $xuanze_arr=array(10,2,5,16,91,82,10,5);
// for($i=0;$i<sizeof($xuanze_arr)-1;$i++){
// 	$max=$xuanze_arr[0];
// 	$max_key=0;
// 	for($j=0;$j<sizeof($xuanze_arr)-$i;$j++){
// 		if($xuanze_arr[$j]>$max){
// 		$max=$xuanze_arr[$j];
// 		$max_key=$j;
//              }
// 	}
// 	$xuanze_arr[$max_key]=$xuanze_arr[sizeof($xuanze_arr)-$i-1];
//     $xuanze_arr[sizeof($xuanze_arr)-$i-1]=$max;

//  }
//      print_r($xuanze_arr);
 

 $erfen_array=array(1,4,6,8,11,16,18,21,24,25,28,31,35,37,39,40,44,48,50);
 $mubiao_num=29;
 
 function erfen_search($array_param,$mubiao_param){
 	static $times=0;
 	$times++;
            $arr_size=count($array_param);
          
            if($arr_size==1){
            	
            	if ($array_param[0]==$mubiao_param) {
            		echo $times;
            		echo "exist";
            		return "exist";
            		# code...
            	}else{
            		echo $times;
            		echo " no exist";
            		return "no exist";
            	}
            }
            if($mubiao_param<$array_param[intval($arr_size/2)]){
            	$array_param=array_slice($array_param,0,intval($arr_size/2));
            	
            		print_r($array_param);
            		echo "</br>";
            		$result1=erfen_search($array_param,$mubiao_param);
            	 echo ' $result1'.$result1;
            	 echo "</br>";
            }else {
            	# code...
            	 $array_param=array_slice($array_param,intval($arr_size/2));
            	print_r($array_param);
            	echo "</br>";
            	 $result2=erfen_search($array_param,$mubiao_param);
            	 echo ' $result2'.$result2;
            	 echo "</br>";
            	 	
            }
 }
 

 $result=erfen_search($erfen_array,$mubiao_num);
 echo $result;









?>