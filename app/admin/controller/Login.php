<?php
/**
 * auther Marke
 * time 2020/3/11 17:16
 */


namespace app\admin\controller;

use app\BaseController;
use think\facade\View;

class Login extends BaseController
{
    public function index()
    {
        return View::fetch();
    }

    public function check()
    {
        return show(config("status.success"), '登录成功');
    }
}