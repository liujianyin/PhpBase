<?php
   $con = mysql_connect("localhost","root","Mb27b9ZsmE0U");
   if (!$con) {  die('Couldnot connect: ' . mysql_error());  }
   mysql_set_charset("utf-8");
   //或者mysql_query("set names utf-8");
   mysql_select_db(datebase_name);
   //或者mysql_query("use datebase_name");
   $result=mysql_query("语句");
   while($row = mysql_fetch_array($result))
    {
        echo json_encode($row['uuid']);

    }
//    echo json_encode($result);

    mysql_close($con);

?>