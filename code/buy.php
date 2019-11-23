<?php
/**
 * Created by PhpStorm.
 * User: frank.liu
 * Date: 2019/11/16
 * Time: 5:25 PM
 * Version: v1.0
 * Email: liuboserehi@gmail.com
 * Description:
 * 代码千万行，注释第一行。
 * 编码不规范，接盘两行泪。
 * @deprecated
 */
require './vendor/autoload.php';
$redis = new Predis\Client(['host'=>'redis']);
$stock_count = $redis->evalsha('64fd09add863eb1a159fcec282e2a5e7349f1970',1,"goods_count","1");
if ( $stock_count > 0 ) {
    $redis->rpush('goods_list',['email'=>'liuboserehi@gmail.com','good_id'=>88]);
} else {
    echo "No stock".PHP_EOL;
}
