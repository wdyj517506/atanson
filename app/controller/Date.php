<?php


namespace app\controller;

use app\BaseController;
use think\facade\Db;

class Date extends BaseController
{
    public function index()
    {
        $result = Db::table('mall_demo')->where('id',1)->find();
        dump($result);
    }
}