<?php


namespace app\controller;


class Error
{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
//        $result = [
//            'status' => 0,
//            'message' => "找不到该控制器",
//            'result' => null,
//        ];
//        return json($result, 400);
        return show(config("status.action_not_found"), "找不到{$name}控制器", null, 401);
    }
}