<?php

namespace Baidu\src;

use Illuminate\Support\ServiceProvider;

class PusherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/common/PushConfig.php' => base_path('config/baidu_push.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('\Baidu\common\BaiduPushServiceInterface',
            '\Baidu\common\BaiduPushService');
        $this->app->bind('SendBaiduPusher',
            '\Baidu\common\BaiduPushServiceInterface');
    }
}
