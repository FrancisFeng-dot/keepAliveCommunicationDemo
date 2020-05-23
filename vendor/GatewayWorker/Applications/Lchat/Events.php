<?php
use \GatewayWorker\Lib\Gateway;
use \GatewayWorker\Lib\Db;
/**
 * 主逻辑
 * 主要是处理 onConnect onMessage onClose 三个方法
 * onConnect 和 onClose 如果不需要可以不用实现并删除
 */
class Events
{
   

 // 当有客户端连接时，将client_id返回，让mvc框架判断当前uid并执行绑定
    // public static function onConnect($client_id)
    // {
    //     Gateway::sendToClient($client_id, json_encode(array(
    //         'type'      => 'init',
    //         'client_id' => $client_id
    //     )));
    // }

    /**
     * 当客户端发来消息时触发
     * @param int $client_id 连接id
     * @param mixed $message 具体消息
     */
    public static function onMessage($client_id, $data)
    {
        Gateway::sendToAll($data);
    
    }

}