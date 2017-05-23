<?php
/**
 * Created by 湖南全服侠网络科技有限公司.
 * User: 全服侠
 * 微信: quanfuxia
 * Date: 2017/5/23
 * Time: 13:53
 */

$loader = require __DIR__."/../vendor/autoload.php";

//echo __DIR__;die;
$loader->add("ComposerTest\\",__DIR__."/../src");
//print_r($loader);die;
$test = new ComposerTest\Test();
$test->say();