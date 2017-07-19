<?php
/**
 * Created by PhpStorm.
 * User: wujianming
 * Date: 2017/7/19
 * Time: 上午9:29
 */
$mapping = array(
    'Baidu\lib\BaseSDK' => __DIR__ . '/BaseSDK.php',
    'Baidu\lib\AssertHelper' => __DIR__ . '/AssertHelper.php',
    'Baidu\lib\configure' => __DIR__ . '/configure.php',
    'Baidu\lib\HttpRequest' => __DIR__ . '/HttpRequest.php',
    'Baidu\lib\PushException' => __DIR__ . '/PushException.php',
    'Baidu\lib\PushSDK' => __DIR__ . '/PushSDK.php',
    'Baidu\lib\PushSimpleLog' => __DIR__ . '/PushSimpleLog.php',
    'Baidu\lib\utils' => __DIR__ . '/utils.php',
);


spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);
