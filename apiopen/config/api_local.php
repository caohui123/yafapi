<?php
/**
 * api 项目功能点配置
 * 可扩展用于以下用途
 * - 功能点开关
 * - 接口降级
 * - 访问频次控制
 * - 其他
 *
 * 配置范例
 * 'module_controller_action' => [ //api路由  基础控制器中的 _bodyId
 *     'status' => true, //全局状态   必选
 *     'level' => 1, //功能级别  可选  级别越高,可用性越高,接口降级时会自动禁用低级别的功能
 *     'date' => [ //时间段 可选
 *         'open' => '2016-05-05 12:00:00', //开放时间   -可选
 *         'close' => '2038-08-08 12:00:00', //关闭时间   -可选
 *     ],
 *     'version' => [ //版本检测  可选
 *         'androidMin' => '1.0.0', //安卓最低版本限制   -可选
 *         'androidMax' => '2.0.0', //安卓最低版本限制   -可选
 *         'iosMin' => '1.0.0', //iOS最低版本限制   -可选
 *         'iosMax' => '2.0.0', //iOS最低版本限制   -可选
 *         'webMin' => '1.0.0', //网页最低版本限制  -可选
 *         'webMax' => '2.0.0', //网页最低版本限制  -可选
 *         //... 其他自定义配置 需自行完善检测逻辑
 *     ],
 *     'rateLimit' => [ //接口频次限制   -可选
 *          'time' => 60, //时间周期 单位(s)
 *          'max' => 30, //单周期最大请求次数
 *     ],
 *     'method' => ['get','post'], //请求方法限制  可选  小写 ['get', 'post', '...',...]
 *     'diyKey' => ['diyValue'], //其他自定义配置   -可选
 * ],
 *
 */

return [
    'index_index_index' => [
        'status' => true,
        'level' => 1,
        'method' => ['post'],
    ],
    'test_index_test' => [
        'status' => false,
    ],
];