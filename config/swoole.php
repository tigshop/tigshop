<?php

return [
    'http' => [
        'enable' => true,
        'host' => '0.0.0.0',
        'port' => env('APP_SOCKETPORT', 99),
        'worker_num' => swoole_cpu_num(),
        'options' => [],
    ],
    'websocket' => [
        'enable' => true,
        'handler' => \think\swoole\websocket\Handler::class,
        'ping_interval' => 25000,
        'ping_timeout' => 160000,
        'room' => [
            'type' => 'table',
            'table' => [
                'room_rows' => 8192,
                'room_size' => 2048,
                'client_rows' => 4096,
                'client_size' => 2048,
            ],
            'redis' => [
                'host' => '127.0.0.1',
                'port' => 6379,
                'max_active' => 3,
                'max_wait_time' => 5,
            ],
        ],
        'listen' => [
            'event' => \app\im\listener\WebsocketEvent::class,
            'open' => \app\im\listener\WebsocketOpen::class,
            'connect' => \app\im\listener\WebsocketConnect::class,
        ],
        'subscribe' => [],
    ],
    'rpc' => [
        'server' => [
            'enable' => false,
            'host' => '0.0.0.0',
            'port' => 9000,
            'worker_num' => swoole_cpu_num(),
            'services' => [],
        ],
        'client' => [],
    ],
    //队列
    'queue' => [
        'enable' => false,
        'workers' => [],
    ],
    'hot_update' => [
        'enable' => env('APP_DEBUG', false),
        'name' => ['*.php'],
        'include' => [app_path()],
        'exclude' => [],
    ],
    //连接池
    'pool' => [
        'db' => [
            'enable' => true,
            'max_active' => 3,
            'max_wait_time' => 5,
        ],
        'cache' => [
            'enable' => true,
            'max_active' => 3,
            'max_wait_time' => 5,
        ],
        //自定义连接池
    ],
    'ipc' => [
        'type' => 'unix_socket',
        'redis' => [
            'host' => '127.0.0.1',
            'port' => 6379,
            'max_active' => 3,
            'max_wait_time' => 5,
        ],
    ],
    'tables' => [],
    //每个worker里需要预加载以共用的实例
    'concretes' => [],
    //重置器
    'resetters' => [],
    //每次请求前需要清空的实例
    'instances' => [],
    //每次请求前需要重新执行的服务
    'services' => [],
];
