<?php
// ///var/www/html/getFileSize.php
// $android_dir=dirname(__FILE__)."/contents_000000/asset/cpk/Android/";
// $handler = opendir($dir);
// while( ($filename = readdir($handler)) !== false ) 

// {

//  //略过linux目录的名字为'.'和‘..'的文件

//  // if($filename != "." && $filename != "..")

//  // {  

//   //输出文件名

//    echo $filename;
//    echo '&nbsp;&nbsp;&nbsp';
//    echo filesize($android_dir.$filename);
//    echo "</br>";

//   // }

//    $i++;

// }
// echo 'android文件个数'.$i;
// echo "</br>";


$ios_dir=dirname(__FILE__)."/contents_000000/asset/cpk/iOS/";
$handler1 = opendir($ios_dir);
while( ($filename1 = readdir($handler1)) !== false ) 

{

 //略过linux目录的名字为'.'和‘..'的文件

 // if($filename != "." && $filename != "..")

 // {  

  //输出文件名

   echo $filename1;
   echo '&nbsp;&nbsp;&nbsp';
   echo filesize($ios_dir.$filename1);
   echo "</br>";

  // }

   $j++;

}
echo 'ios文件个数'.$j;
closedir($handler1);
?>