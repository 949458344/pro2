<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/22 0022
 * Time: 13:54
 */
$redis = new redis();
$result = $redis->connect('127.0.0.1', 6379);
var_dump($result); //结果：bool(true)
$result = $redis->set('test',"11111111111");
var_dump($result);    //结果：bool(true)
$result = $redis->get('test');
var_dump($result);   //结果：string(11) "11111111111"
die;
require "redis.class.php";
$redis = new RedisCluster();
$redis->set('title','华育国际');
echo $redis->get('title');
die;
?>