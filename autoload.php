<?php
/**
 * Created by PhpStorm.
 * User: wujianming
 * Date: 2017/7/19
 * Time: 上午9:29
 */
$mapping = array(
    'Baidu\lib\BaseSDK' => __DIR__ . '/src/lib/BaseSDK.php',
    'Baidu\lib\AssertHelper' => __DIR__ . '/src/lib/AssertHelper.php',
    'Baidu\lib\configure' => __DIR__ . '/src/lib/configure.php',
    'Baidu\lib\HttpRequest' => __DIR__ . '/src/lib/HttpRequest.php',
    'Baidu\lib\PushException' => __DIR__ . '/src/lib/PushException.php',
    'Baidu\lib\PushSDK' => __DIR__ . '/src/lib/PushSDK.php',
    'Baidu\lib\PushSimpleLog' => __DIR__ . '/src/lib/PushSimpleLog.php',
    'Baidu\lib\utils' => __DIR__ . '/src/lib/utils.php',
);


spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);
