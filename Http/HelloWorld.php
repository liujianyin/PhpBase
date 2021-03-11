<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/7/31
 * Time: 10:48
 */
echo "Hello World";
echo json_encode($_POST);
file_put_contents("test.txt",serialize($_POST));

