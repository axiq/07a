<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/20
 * Time: 10:28
 */
function chou($num){
    if($num<=0){
        return false;
    }
    while ($num%2==0){
        $num=$num/2;
    }
    while ($num%3==0){
        $num=$num/3;
    }
    while ($num%5==0){
        $num=$num/5;
    }
    if($num==1){
        return '是';
    }
    return '不是';
}
$num=12;
echo $num.'是否为丑数：'.chou($num);
?>