<?php
/**
 * Created by PhpStorm.
 * User: liujianyin.annabelle
 * Date: 2019/12/18
 * Time: 15:48
 */

//计算中奖概率
function getRand($proArr){
    $rs = '';//中奖结果
    $proSum = array_sum($proArr);//概率数组的总概率精度
    var_dump($proSum);
    //概率数组循环
    foreach ($proArr as $key => $proCur) {
        $randNum = mt_rand(1, $proSum);
        if ($randNum <= $proCur) {
            $rs = $key;
            break;
        } else {
            $proSum -= $proCur;
        }
    }
    unset($proArr);
//    echo $rs;
    return $rs;
}

$prize_arr = array(
    '0' => array('id' => 10, 'title' => 'iphone5s', 'v' => 5),
    '1' => array('id' => 20, 'title' => '联系笔记本', 'v' => 5),
//    '2' => array('id' => 30, 'title' => '音箱设备', 'v' => 2),
//    '3' => array('id' => 40, 'title' => '30GU盘', 'v' => 4),
//    '4' => array('id' => 50, 'title' => '话费50元', 'v' => 1),
);
$arr=array();
foreach ($prize_arr as $key => $val) {
    $arr[$key+1] = $val['v'];
}

echo '<pre />';
//print_r($prize_arr);
print_r($arr);
//exit();
//
echo $prize_id = getRand($arr); //根据概率获取奖品id
//
////$data['msg'] = ($prize_id == 7) ? 0 : 1; //如果为0则没中
//echo $data['prize_title'] = $prize_arr[$prize_id - 1]['title']; //中奖奖品
////echo json_encode($data);//以json数组返回给前端
//exit();