<?php
/**
 * *************************************************************************
 *
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 *
 * ************************************************************************
 */
/**
 *
 * @file hello.php
 * @encoding UTF-8
 *
 *
 *         @date 2015年3月10日
 *
 */
require '../autoload.php';

class demo{
    public function __construct(
    )
    {
        $this->pushSdk = new \Baidu\lib\PushSDK();
    }

    public function send()
    {
        // 创建SDK对象.
        $channelId = '3785562685113372034';

// message content.
        $message = array (
            // 消息的标题.
            'title' => 'Hi!',
            // 消息内容
            'description' => "hello, this message from baidu push service."
        );

// 设置消息类型为 通知类型.
        $opts = array (
            'msg_type' => 1
        );

// 向目标设备发送一条消息
        $rs = $this->pushSdk -> pushMsgToSingleDevice($channelId, $message, $opts);

// 判断返回值,当发送失败时, $rs的结果为false, 可以通过getError来获得错误信息.
        if($rs === false){
            print_r($this->pushSdk->getLastErrorCode());
            print_r($this->pushSdk->getLastErrorMsg());
        }else{
            // 将打印出消息的id,发送时间等相关信息.
            print_r($rs);
        }

        echo "done!";
    }
}

$a = new demo();
//$a->send();


